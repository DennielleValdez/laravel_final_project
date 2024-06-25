<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Favorites;
use Session;

class FaveController extends Controller
{
    // SHOW FAVORITES TABLE
    public function viewFavorites()
    {
    $favorites = session()->get('favorites', []);
    $total = array_sum(array_column($favorites, 'total'));

    // Debug the session data
    // dd($cart);

    return view('favorites', compact('favorites', 'total'));
    }


    // ADD TO CART FUNCTION
    public function addToFavorites(Request $request, string $id)
    {
        $product = Product::find($id);
    
        if (!$product) {
            return redirect()->back()->with('error', 'Product not found!');
        }
    
        \Log::info('Product details:', $product->toArray());
    
        $favorites = session()->get('favorites', []);
    
        if (isset($favorites[$id])) {
            $favorites[$id]['quantity']++;
            $favorites[$id]['total'] = $favorites[$id]['quantity'] * $product->product_price;
        } else {
            $favorites[$id] = [
                'name' => $product->product_name,
                'quantity' => 1,
                'price' => $product->product_price,
                'total' => $product->product_price,
                'image' => $product->product_img
            ];
        }
    
        session()->put('favorites', $favorites);
    
        // Save to the database
        $favoritesItem = favorites::updateOrCreate(
            ['product_id' => $id],
            [
                'product_name' => $product->product_name,
                'quantity' => $favorites[$id]['quantity'],
                'product_price' => $product->product_price,
                'total' => $favorites[$id]['total'],
                'product_img' => $product->product_img,
                'product_brand' => $product->product_brand // Add this line
            ]
        );
    
        return redirect()->route('favorites.view')->with('success', 'Product added to favorites!');

    }

    // REMOVE ITEMS ON CART
    public function removeFromFavorites(Request $request, $id)
    {
        $favorites = session()->get('favorites', []);

        if (isset($favorites[$id])) {
            // Remove from session cart
            unset($favorites[$id]);
            session()->put('favorites', $favorites);

            // Remove from database
            $favoritesItem = favorites::where('product_id', $id)->first();
            if ($favoritesItem) {
                $favoritesItem->delete();
            }

            return redirect()->route('favorites.view')->with('success', 'Product removed from cart!');
        }

        return redirect()->route('favorites.view')->with('error', 'Product not found in cart!');
    }
}

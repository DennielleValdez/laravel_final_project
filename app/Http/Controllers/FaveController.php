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
        if (Session::has('id') && Session::get('role') == 0) {
            $favorites = session()->get('favorites', []);
            $total = array_sum(array_column($favorites, 'total'));

            return view('favorites', compact('favorites', 'total'));
        } else {
            return redirect("/login");
        }
    }

    // ADD TO FAVORITES FUNCTION
    public function addToFavorites(Request $request, string $id)
    {
        if (Session::has('id') && Session::get('role') == 0) {
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
            Favorites::updateOrCreate(
                ['product_id' => $id],
                [
                    'product_name' => $product->product_name,
                    'quantity' => $favorites[$id]['quantity'],
                    'product_price' => $product->product_price,
                    'total' => $favorites[$id]['total'],
                    'product_img' => $product->product_img,
                    'product_brand' => $product->product_brand
                ]
            );

            return redirect()->route('favorites.view')->with('success', 'Product added to favorites!');
        } else {
            return redirect("/login");
        }
    }

    // REMOVE ITEMS FROM FAVORITES
    public function removeFromFavorites(Request $request, $id)
    {
        if (Session::has('id') && Session::get('role') == 0) {
            $favorites = session()->get('favorites', []);

            if (isset($favorites[$id])) {
                // Remove from session favorites
                unset($favorites[$id]);
                session()->put('favorites', $favorites);

                // Remove from database
                $favoritesItem = Favorites::where('product_id', $id)->first();
                if ($favoritesItem) {
                    $favoritesItem->delete();
                }

                return redirect()->route('favorites.view')->with('success', 'Product removed from favorites!');
            }

            return redirect()->route('favorites.view')->with('error', 'Product not found in favorites!');
        } else {
            return redirect("/login");
        }
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\carttbls;
use Session;

class CartController extends Controller
{
    // SHOW CART TABLE
    public function viewCart()
    {
        if (Session::has('id') && Session::get('role') == 0) {
            $cart = session()->get('cart', []);
            $total = array_sum(array_column($cart, 'total'));

            return view('cart', compact('cart', 'total'));
        } else {
            return redirect("/login");
        }
    }

    // ADD TO CART FUNCTION
    public function addToCart(Request $request, string $id)
    {
        if (Session::has('id') && Session::get('role') == 0) {
            $product = Product::find($id);

            if (!$product) {
                return redirect()->back()->with('error', 'Product not found!');
            }

            \Log::info('Product details:', $product->toArray());

            $cart = session()->get('cart', []);

            if (isset($cart[$id])) {
                $cart[$id]['quantity']++;
                $cart[$id]['total'] = $cart[$id]['quantity'] * $product->product_price;
            } else {
                $cart[$id] = [
                    'name' => $product->product_name,
                    'quantity' => 1,
                    'price' => $product->product_price,
                    'total' => $product->product_price,
                    'image' => $product->product_img
                ];
            }

            session()->put('cart', $cart);

            // Save to the database
            carttbls::updateOrCreate(
                ['product_id' => $id],
                [
                    'product_name' => $product->product_name,
                    'quantity' => $cart[$id]['quantity'],
                    'product_price' => $product->product_price,
                    'total' => $cart[$id]['total'],
                    'product_img' => $product->product_img,
                    'product_brand' => $product->product_brand
                ]
            );

            return redirect()->route('cart.view')->with('success', 'Product added to cart!');
        } else {
            return redirect("/login");
        }
    }

    // REMOVE ITEMS ON CART
    public function removeFromCart(Request $request, $id)
    {
        if (Session::has('id') && Session::get('role') == 0) {
            $cart = session()->get('cart', []);

            if (isset($cart[$id])) {
                // Remove from session cart
                unset($cart[$id]);
                session()->put('cart', $cart);

                // Remove from database
                $cartItem = carttbls::where('product_id', $id)->first();
                if ($cartItem) {
                    $cartItem->delete();
                }

                return redirect()->route('cart.view')->with('success', 'Product removed from cart!');
            }

            return redirect()->route('cart.view')->with('error', 'Product not found in cart!');
        } else {
            return redirect("/login");
        }
    }
}
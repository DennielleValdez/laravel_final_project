<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Session;

class CartController extends Controller
{
    public function viewCart()
    {
        $cart = session()->get('cart', []);
        $total = array_sum(array_column($cart, 'total'));

        return view('cart', compact('cart', 'total'));
    }

    public function addToCart(Request $request, $id)
    {
        $product = Product::find($id);

        if(!$product) {
            return redirect()->back()->with('error', 'Product not found!');
        }

        $cart = session()->get('cart', []);

        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
            $cart[$id]['total'] = $cart[$id]['quantity'] * $product->price;
        } else {
            $cart[$id] = [
                "name" => $product->name,
                "quantity" => 1,
                "price" => $product->price,
                "total" => $product->price,
                "image" => $product->product_img
            ];
        }

        session()->put('cart', $cart);

        return redirect()->route('cart.view')->with('success', 'Product added to cart!');
    }

    public function removeFromCart(Request $request, $id)
    {
        $cart = session()->get('cart', []);

        if(isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }

        return redirect()->route('cart.view')->with('success', 'Product removed from cart!');
    }
}
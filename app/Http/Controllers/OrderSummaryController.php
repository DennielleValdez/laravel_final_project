<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class OrderSummaryController extends Controller
{
    public function viewOrderSummary()
    {
        if (Session::has('id') && Session::get('role') == 0) {
            $cart = session()->get('cart', []);
            $total = array_sum(array_column($cart, 'total'));

            return view('ordersummary', compact('cart', 'total'));
        } else {
            return redirect("/login");
        }
    }
}

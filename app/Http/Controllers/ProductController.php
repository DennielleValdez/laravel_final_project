<?php

namespace App\Http\Controllers;

use DB;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // View page ni Product
    public function single_page(string $id){
        $product = Product::query()
        ->select('*')
        ->where('id', '=', $id)
        ->get()
        ->first();

        return view ('view_product', compact('product'));
    }

    // Create a Products 
    public function create_product(Request $r){
        $newproduct = new Product;

        $newproduct->product_brand = $r->input('product_brand');
        $newproduct->product_category = $r->input('product_category');
        $newproduct->product_name = $r->input('product_name');
        $newproduct->product_img = $r->input('product_img');
        $newproduct->product_description = $r->input('product_description');
        $newproduct->product_price = $r->input('product_price');
        $newproduct->skin_type = $r->input('skin_type');
        $newproduct->save();

        return redirect("productindex");
    }

    // Create product form
    public function create_product_form(){
        $product = Product::query()
        ->select('*')
        ->get();

        return view('productindex', compact('product'));
    }

    
}
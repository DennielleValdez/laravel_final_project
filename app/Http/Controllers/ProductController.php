<?php

namespace App\Http\Controllers;

use DB;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // EDIT TEACHERS INFO
    public function edit_product(Request $r, string $id){
        $editproduct = Product::where('id', '=', $id)
        ->update(
                [
                    'product_brand' => $r->input('product_brand'),
                    'product_category' => $r->input('product_category'),
                    'product_name' => $r->input('product_name'),
                    'product_img' => $r->input('product_img'),
                    'product_description' => $r->input('product_description'),
                    'product_price' => $r->input('product_price'),
                    'skin_type' => $r->input('skin_type'),
                ]
            );
            return redirect ('productindex');
    }
    
    public function edit_product_form(string $id){
        $editproduct = Product::query()
        ->select("*")
        ->where('id', '=', $id)
        ->get()
        ->first();

        $product = Product::query()
        ->select('*')
        ->get();

        return view('edit_product', compact('editproduct', 'product'));
    }

    // Delete product
    public function delete_product(string $id){
        $deleteproduct = Product::where('id', '=', $id)
        ->delete();

        return redirect("productindex");
    }

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
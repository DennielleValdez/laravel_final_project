<?php

namespace App\Http\Controllers;

use DB;

use App\Models\Product;
use Illuminate\Http\Request;
use Session;



class ProductController extends Controller
{
    // Some By Mi Show products
    public function showSomeByMiProducts() {
    // Fetch only Some By Mi products from the database
    $someByMiProducts = Product::where('product_brand', 'Some By Mi')->get();
    return view('Somebymi', compact('someByMiProducts'));
    }
    
    // Clinique Show products
    public function showCliniqueProducts() {
    // Fetch only Clinique products from the database
    $cliniqueProducts = Product::where('product_brand', 'Clinique')->get();
    return view('Clinique', compact('cliniqueProducts'));
    }


    // Dior Show products
    public function showDiorProducts() {
    // Fetch only Dior products from the database
    $diorProducts = Product::where('product_brand', 'Dior')->get();
    return view('Dior', compact('diorProducts'));
    }


    // Estee Lauder Show products
    public function showEsteeLauderProducts() {
    // Fetch only Estee Lauder products from the database
    $esteeLauderProducts = Product::where('product_brand', 'Estee Lauder')->get();
    return view('EsteeLauder', compact('esteeLauderProducts'));
    }
    
    
    // Olay Show products
    public function showOlayProducts() {
        // Fetch only Olay products from the database
        $olayProducts = Product::where('product_brand', 'Olay')->get();
        return view('Olay', compact('olayProducts'));
    }


    // All Products show
    public function showAllProducts() {
        $products = Product::paginate(10); // Fetch all products from the database
        
        return view('allProducts', compact('products'));
    }

    // EDIT PRODUCT INFO
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
    public function create_product(Request $request){

        $newproduct = new Product;

        $file = $request->file('product_img');
        // Gathering Data

        $filenameextension = time() . "." . $request->product_img->extension();

        $filename = $request->getSchemeAndHttpHost() . "/img/" . $filenameextension; 
        // Generating of image name
        $request->product_img->move(public_path('/img/'), $filename);

        $newproduct->product_brand = $request->input('product_brand');
        $newproduct->product_category = $request->input('product_category');
        $newproduct->product_name = $request->input('product_name');
        $newproduct->product_img = $filenameextension;
        $newproduct->product_description = $request->input('product_description');
        $newproduct->product_price = $request->input('product_price');
        $newproduct->skin_type = $request->input('skin_type');
        // $newproduct->id = Session::get('id');
        $newproduct->save();

        return redirect("productindex");
    }

    // Create product form
    public function create_product_form(){
        $product = Product::query()
        ->select('*')
        // ->where('product_brand', 'Olay')
        ->get();

        return view('productindex', compact('product'));
    }

}
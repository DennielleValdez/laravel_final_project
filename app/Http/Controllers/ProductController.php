<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Session;

class ProductController extends Controller
{
    // Some By Mi Show products
    public function showSomeByMiProducts() {
        if (Session::has('id') && Session::get('role') == 1) {
            return view('Somebymi');
        } elseif (Session::has('id') && Session::get('role') == 0) {
            $someByMiProducts = Product::where('product_brand', 'Some By Mi')->get();
            return view('Somebymi', compact('someByMiProducts'));
        } else {
            return redirect("/login");
        }
    }
    
    // Clinique Show products
    public function showCliniqueProducts() {
        $cliniqueProducts = Product::where('product_brand', 'Clinique')->get();
        return view('Clinique', compact('cliniqueProducts'));

        if (Session::has('id') && Session::get('role') == 1) {
            return view('Clinique'); 
        } else {
            return redirect("/login");
        }
    }

    // Dior Show products
    public function showDiorProducts() {
        $diorProducts = Product::where('product_brand', 'Dior')->get();
            return view('Dior', compact('diorProducts'));

        if (Session::has('id') && Session::get('role') == 1) {
            return view('Dior');
        } else {
            return redirect("/login");
        }
    }

    // Estee Lauder Show products
    public function showEsteeLauderProducts() {
        $esteeLauderProducts = Product::where('product_brand', 'Estee Lauder')->get();
            return view('EsteeLauder', compact('esteeLauderProducts'));

        if (Session::has('id') && Session::get('role') == 1) {
            return view('EsteeLauder');
        } else {
            return redirect("/login");
        }
    }

    // Olay Show products
    public function showOlayProducts() {
        $olayProducts = Product::where('product_brand', 'Olay')->get();
            return view('Olay', compact('olayProducts'));
        if (Session::has('id') && Session::get('role') == 1) {
            return view('Olay');
        } else {
            return redirect("/login");
        }
    }

    // All Products show
    public function showAllProducts() {
        $products = Product::paginate(10); // Fetch all products from the database
            return view('allProducts', compact('products'));

        if (Session::has('id') && Session::get('role') == 1) {
            return view('allProducts');
        } else {
            return redirect("/login");
        }
    }

    // Edit Product Info
    public function edit_product(Request $r, string $id){
        if (Session::has('id') && Session::get('role') == 0) {
            return view('welcome');
        } elseif (Session::has('id') && Session::get('role') == 1) {
            Product::where('id', '=', $id)
                ->update([
                    'product_brand' => $r->input('product_brand'),
                    'product_category' => $r->input('product_category'),
                    'product_name' => $r->input('product_name'),
                    'product_img' => $r->input('product_img'),
                    'product_description' => $r->input('product_description'),
                    'product_price' => $r->input('product_price'),
                    'skin_type' => $r->input('skin_type'),
                ]);
            return redirect ('productindex');
        } else {
            return redirect("/login");
        }
    }
    
    public function edit_product_form(string $id){
        if (Session::has('id') && Session::get('role') == 0) {
            return view('welcome');
        } elseif (Session::has('id') && Session::get('role') == 1) {
            $editproduct = Product::query()
                ->select("*")
                ->where('id', '=', $id)
                ->first();

            $product = Product::query()
                ->select('*')
                ->get();

            return view('edit_product', compact('editproduct', 'product'));
        } else {
            return redirect("/login");
        }
    }

    // Delete product
    public function delete_product(string $id){
        if (Session::has('id') && Session::get('role') == 0) {
            return view('welcome');
        } elseif (Session::has('id') && Session::get('role') == 1) {
            Product::where('id', '=', $id)->delete();
            return redirect("productindex");
        } else {
            return redirect("/login");
        }
    }

    // View page ni Product
    public function single_page(string $id){
    if (Session::has('id') && Session::get('role') == 1) {
        $product = Product::query()
            ->select('*')
            ->where('id', '=', $id)
            ->first();
        return view('view_product', compact('product'));
    } else {
        return redirect("/login");
    }
    }

    // Create a Products 
    public function create_product(Request $request){
        // if (Session::has('id') && Session::get('role') == 0) {
        //     return view('welcome');
        if (Session::has('id') && Session::get('role') == 1) {
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
            $newproduct->save();

            return redirect("productindex");
        } else {
            return redirect("/login");
        }
    }

    // Create product form
    public function create_product_form(){
        
    if (Session::has('id') && Session::get('role') == 1) {
            $product = Product::query()
                ->select('*')
                ->get();
            return view('productindex', compact('product'));
        } else {
            return redirect("/login");
        }
    }
}
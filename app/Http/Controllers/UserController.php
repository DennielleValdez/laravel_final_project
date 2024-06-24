<?php

namespace App\Http\Controllers;


use App\Models\UsersTable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


// //////////////////////////////////////////////////////

class UserController extends Controller
{
    // ADMIN LOG IN VIEW
    public function user_to_Adminpage()
    {
        if (Auth::check() && Auth::user()->user_role == 1) {
            return view('productindex');
        }
        return redirect()->route('home');
    }

    // USER LOG IN VIEW
    public function user_to_Homepage()
    {
        if (Auth::check() && Auth::user()->user_role == 0) {
            return view('welcome');
        }
        return redirect()->route('home');
    }



    
    // SHOW USER ACCOUNT DETAILS
    public function show_UserAccounts(){
        $user = UsersTable::query()
        ->select('*')
        ->get();

        return view('userAccounts', compact('user'));

    }

    public function show_signup(){
        return view('signup');
    }

    public function signup(Request $request){
        $user = new UsersTable;

        $user->user_fname = $request->input('fname');
        $user->user_lname = $request->input('lname');
        $user->user_email = $request->input('email');
        $user->user_password = Hash::make($request->input('password'));
        $user->user_role = "0";
        $user->save();

        return redirect("/login");
    }

    public function show_login(){
        return view('login');
    }

    public function login(Request $request){
        $user = UsersTable::where('user_email', '=', $request->username)->first();
        if($user){
            if(Hash::check($request->password,$user->user_password)){
                return "Login Successfull!";
            }else{
                return "Incorrect Password";
            }
        }else{
            return "No account is registred";
        }
    }

}

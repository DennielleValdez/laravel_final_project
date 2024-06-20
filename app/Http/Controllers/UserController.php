<?php

namespace App\Http\Controllers;

use App\Models\UsersTable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
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

<?php

namespace App\Http\Controllers;

use App\Models\UsersTable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Session;

class UserController extends Controller
{

    // Log in result
    public function login(Request $request)
{
    $user = UsersTable::where('user_email', '=', $request->username)->first();
    
    if ($user) {
        if (Hash::check($request->password, $user->user_password)) {
            $request->session()->put('id', $user->user_id);
            $request->session()->put('fname', $user->user_fname);
            $request->session()->put('lname', $user->user_lname);
            $request->session()->put('email', $user->user_email);
            $request->session()->put('role', $user->user_role);

            if ($user->user_role == 1) {
                // Redirect admin user to productindex.blade.php
                return redirect("/productindex");
            } else {
                // Redirect non-admin user to profile.blade.php
                return redirect("/profile");
            }
        } else {
            return "Incorrect Password";
        }
    } else {
        return "No account is registered";
    }
}

    // Show profile
    public function show_profile()
    {
        $user_id = session('id'); // Assuming you store user id in session

        // Fetch user details using the session user id
        $user = UsersTable::where('user_id', $user_id)->first();

        return view('profile', compact('user'));
    }


    // Logout
    public function logout()
    {
        Session::forget('id');
        Session::forget('fname');
        Session::forget('lname');
        Session::forget('email');
        Session::forget('role');
        
        return redirect('/login')->with('success', 'You have been logged out.');
    }



    // SHOW USER ACCOUNT DETAILS
    public function show_UserAccounts()
    {
        $user = UsersTable::where('user_role', '0')->get();
        
        return view('userAccounts', compact('user'));
    }

     // SHOW ADMIN ACCOUNT DETAILS
    public function show_AdminAccounts()
    {
        $admin = UsersTable::where('user_role', '1')->get();
        
        return view('adminAccounts', compact('admin'));
    }

    // SHOW SIGN UP
    public function show_signup()
    {
        return view('signup');
    }

    public function signup(Request $request)
    {
        $user = new UsersTable;

        $user->user_fname = $request->input('fname');
        $user->user_lname = $request->input('lname');
        $user->user_email = $request->input('email');
        $user->user_password = Hash::make($request->input('password'));
        $user->user_role = "0";
        $user->save();

        return redirect("/login");
    }

    public function show_login()
    {
        return view('login');
    }
}
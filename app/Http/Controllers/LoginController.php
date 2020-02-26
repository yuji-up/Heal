<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB, Hash;
use \Illuminate\Support\Str;

class LoginController extends Controller
{
    protected function formLogin(Request $request) 
    {
        $request->validate([
            'email' => 'required|string',
            'password' => 'required|string|min:6'
        ]);
        $email = $request->input('email');
        $password = $request->input('password');

        if ($email == "admin" && $password == "123456")
        {
            return redirect('products');
        }

        $hashedPassword = DB::table('getstarts')->where('email', $email)->first();

       // echo $role_type;
            if(Hash::check($password, $hashedPassword->password)){ 
                return redirect('home-page');
            } 
            else {
                return redirect('login')->with('login_error', 
                'Invalid credentials entered');
            };
    }
}

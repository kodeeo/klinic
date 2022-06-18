<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('admin.pages.login.login');
    }

    public function dologin(Request $request)
    {
        // dd($request->all());
        $userlogin=$request->except('_token');
        // dd(Auth::attempt($userlogin));
        if(Auth::attempt($userlogin)){
        // dd(auth()->user());

            return redirect()->route('admin.dashboard');
        }
        else
        {
            return redirect()->back();
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('home')->with('message','Logged out.');
    }
}

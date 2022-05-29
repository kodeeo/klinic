<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\ResetPasswordMail;
use Illuminate\Support\Facades\Mail;

class PasswordController extends Controller
{
    public function forgetPassword()
    {
        return view('admin.pages.password.forget_password');
    }
    public function forgetPasswordEmailPost(Request $request)
    {
        $request->validate([
            'email'=>'required|exists:users'
        ]);
        $token=Str::random(50);
        $user=User::where('email', $request->email)->first();
        $user->update([
            'reset_token'=>$token,
            'reset_token_expire_at'=>Carbon::now()->addMinute(2),
        ]);
        $link=route('reset.password', $token);
        Mail::to($request->email)->send(new ResetPasswordMail($link));
        return redirect()->route('master.login');
    }
    public function resetPassword($token)
    {
        return view('admin.pages.password.reset_password', compact('token'));
    }
    public function resetPasswordPost(Request $request)
    {
        $request->validate([
            'reset_token'=>'required',
            'password'=>'required|confirmed',
        ]);
        //check token exist or not
        $userHasToken=User::where('reset_token',$request->reset_token)->first();
        if($userHasToken){
            //check token expired or not
            if($userHasToken->reset_token_expire_at>=Carbon::now()){
               $userHasToken->update([
                  'password'=> bcrypt($request->password),
                   'reset_token'=>null
               ]);
               return redirect()->back();
            }else{
                return redirect()->back();
            }
        }else
        {
            return redirect()->back();
        }
    }
}

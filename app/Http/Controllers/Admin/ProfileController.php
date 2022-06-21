<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class ProfileController extends Controller
{
    public function profile($id){
        $user=User::find($id);
        return view('admin.pages.profile.details',compact('user'));
    }

    public function edit($id){
        $user=User::find($id);
        return view('admin.pages.profile.edit',compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user=User::find($id);
        $filename=$user->image;
        //Check image or not
        if($request->hasFile('image'))
        {
            $file=$request->file('image');
            $filename=date('Ymdhms').'.'.$file->getClientOriginalExtension();
            $file->storeAs('/uploads/users/',$filename);
        }

        $user->update([
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'username'=>$request->username,
            'gender'=>$request->gender,
            'mobile'=>$request->mobile,
            'date_of_birth'=>$request->birth,
            'email'=>$request->email,
            'address'=>$request->address,
            'status'=>$request->status,
            'image'=>$filename

        ]);
        Toastr::success('Profile updated Successfully', 'success');
        return redirect()->back();
    }

    public function passwordEdit($id){
        $user=User::find($id);
        return view('admin.pages.profile.password-edit',compact('user'));
    }

    public function passwordUpdate(Request $request, $id)
    {
        $user=User::find($id);


        $user->update([
            'password'=>bcrypt($request->password),
        ]);
        Toastr::success('Password updated Successfully', 'success');
        return redirect()->back();
    }
}

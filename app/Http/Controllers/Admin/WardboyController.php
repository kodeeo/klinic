<?php

namespace App\Http\Controllers\Admin;

use App\Models\Wardboy;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class WardboyController extends Controller
{
    public function wardboyList()
    {
        $wardboys= Wardboy::paginate(10);
        return view('admin.pages.wardboy.list',compact('wardboys'));
    }

    public function wardboyAdd()
    {
        return view('admin.pages.wardboy.create');
    }

    public function wardboyStore(Request $request)
    {
        $filename='';
        if($request->hasFile('image'))
        {
            $file=$request->file('image');
            $filename=date('Ymdhms').'.'.$file->getClientOriginalExtension();
            $file->storeAs('/uploads',$filename);
        }

        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'contact'=>'required',
            'address'=>'required',
            'joinDate'=>'required',
            'hrs'=>'required',

        ]);
        Wardboy::create([
           'name'=>$request->name,
           'email'=>$request->email,
           'contact'=>$request->contact,
           'address'=>$request->address,
           'joinDate'=>$request->joinDate,
           'hrs'=>$request->hrs,
           'image'=>$filename,
        ]);
        Toastr::success('Wardboy added Successfully', 'success');
        return redirect()->route('wardboy.list');
    }

    public function wardboyEdit($id)
    {
        $wardboy=Wardboy::find($id);
        return view('admin.pages.wardboy.edit',compact('wardboy'));
    }

    public function wardboyUpdate(Request $request, $id)
    {
        $wardboy=Wardboy::find($id);
        $filename=$wardboy->image;

        if($request->hasFile('image'))
        {
            $file=$request->file('image');
            $filename=date('Ymdhms').'.'.$file->getClientOriginalExtension();
            $file->storeAs('/uploads',$filename);
        }
        $wardboy->update([
           'name'=>$request->name,
           'email'=>$request->email,
           'contact'=>$request->contact,
           'address'=>$request->address,
           'joinDate'=>$request->joinDate,
           'hrs'=>$request->hrs,
           'image'=>$filename,
        ]);
        Toastr::success('Wardboy updated Successfully', 'success');
        return redirect()->route('wardboy.list');

    }

    public function wardboyShow($id)
    {
        $wardboys=Wardboy::find($id);
        return view('admin.pages.wardboy.view',compact('wardboys'));
    }

    public function wardboyDelete($id)
    {
        Wardboy::find($id)->delete();
        Toastr::success('Wardboy deleted Successfully', 'success');
        return redirect()->route('wardboy.list');
    }
}

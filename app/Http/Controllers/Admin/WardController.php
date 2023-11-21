<?php

namespace App\Http\Controllers\Admin;

use App\Models\Ward;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Brian2694\Toastr\Toastr as ToastrToastr;
use Illuminate\Support\Facades\Validator;

class WardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wards=Ward::paginate(2);

        return view('admin.pages.ward.index',compact('wards'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
      
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  

        $validate=Validator::make($request->all(),[
            'name'=>'required',
            'status'=>'required'

        ]);

        if($validate->fails()){

            Toastr::error('Validation failed');
            return redirect()->back();
        }
        Ward::create([
            'name'=>$request->name,
            'status'=>$request->status
        ]);

        // $quantity=$request->quantity;
        // $from=$request->from;
        // for ($x = 0; $x < $quantity; $x++) {
        //     $ward=Ward::insert([
        //         'name'=>$request->name,
        //         'status'=>$request->status,
        //     ]);
        
        return redirect()->route('ward.index')->with(Toastr::info('Ward Created Successfully'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ward=Ward::find($id);
        return view('admin.pages.ward.view',compact('ward'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ward=Ward::find($id);
        return view('admin.pages.ward.edit',compact('ward'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $validate=Validator::make($request->all(),[

            'ward_name'=>'required',
            'status'=>'required'
            
        ]);
      
        if($validate->fails()){

            Toastr::error('Validation failed');
            return redirect()->back();
        }
        $ward=Ward::find($id);
        $ward->update([
            'name'=>$request->ward_name,
            'status'=>$request->status
        ]);

        Toastr::success('Ward Updated Successfully');
        return redirect()->route('ward.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Ward::find($id)->delete();
        return redirect()->route('ward.index')->with(Toastr::error('Ward Deleted'));
    }

    public function statusUpdate(Request $request,$id){

            $ward= Ward::find($id);
            $ward->update([

                'status'=>$request->status
            ]);

            Toastr::success('Ward Status Updated Successully');
            return redirect()->route('ward.index');
    }
}

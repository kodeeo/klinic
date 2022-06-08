<?php

namespace App\Http\Controllers\Admin;

use App\Models\Ward;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class WardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wards=Ward::all();
        return view('admin.pages.ward.index',compact('wards'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $quantity=$request->quantity;
        $from=$request->from;
        for ($x = 0; $x < $quantity; $x++) {
            $ward=Ward::insert([
                'ward_type'=>$request->ward_type,
                'ward_number'=>$request->ward_number,
                'bed_number'=>$from+$x,
            ]);
        }
        return redirect()->route('ward.index')->with(Toastr::info('Ward Bed Created Successfully'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
        return redirect()->route('ward.index')->with(Toastr::error('Ward Bed Deleted'));
    }
}

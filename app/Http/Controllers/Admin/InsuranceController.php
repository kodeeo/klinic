<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Insurance;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class InsuranceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $insurance=Insurance::all();
        return view('admin.pages.Insurance.index',compact('insurance'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.pages.Insurance.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());

            Insurance::create([
                'name'=>$request->name,
                'service_tax'=>$request->service_tax,
                'discount'=>$request->discount,
                'remark'=>$request->remark,
                'insurance_no'=>$request->insurance_no,
                'insurance_code'=>$request->insurance_code,
                'disease_name'=>$request->disease_name,
                'disease_charge'=>$request->disease_charge,
                'hospital_rate'=>$request->hospital_rate,
                'insurance_rate'=>$request->insurance_rate,
                'total'=>$request->total,
                'status'=>'active',
            ]);



        return redirect()->route('insurance.index')->with(Toastr::success('Insurance Added Successfully'));
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
        //
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Models\ClinicSetup;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class ClinicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clinic=ClinicSetup::all();
        return view('admin.pages.clinicSetup.show',compact('clinic'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $clinic=ClinicSetup::find($id);
        return view('admin.pages.clinicSetup.show',compact('clinic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $clinic=ClinicSetup::find($id);
        return view('admin.pages.clinicSetup.edit',compact('clinic'));
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
        $clinic=ClinicSetup::find($id);

        $request->validate([
            'email' => "unique:clinic_setups,email,$id"
        ]);

        $filename=$clinic->image;
        //Check image or not
        if($request->hasFile('image'))
        {
            $file=$request->file('image');
            $filename=date('Ymdhms').'.'.$file->getClientOriginalExtension();
            $file->storeAs('/uploads/klinicLogo',$filename);
        }

        $clinic->update([
            'name'=>$request->name,
            'slogan'=>$request->slogan,
            'address'=>$request->address,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'web'=>$request->web,
            'image'=>$filename
            ]);

            Toastr::success('Clinic Informations updated Successfully');
            return redirect()->route('clinic.index');
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

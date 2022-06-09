<?php

namespace App\Http\Controllers\Admin\Activities;

use App\Models\Doctor;
use Illuminate\Http\Request;
use App\Models\Investigation;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class InvestigationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $investigations=Investigation::all();
        return view('admin.pages.hospital activities.investigation.index',compact('investigations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $doctor=Doctor::all();
        return view('admin.pages.hospital activities.investigation.create',compact('doctor'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $image_name=null;
        if($request->hasFile('investigation_img'))
        {
            $image_name=date('Ymdhis').'.'.$request->file('investigation_img')->getClientOriginalExtension();
            $request->file('investigation_img')->storeAs('/uploads/investigations',$image_name);
        }

        Investigation::create([
            'patient_id'=>$request->patient_id,
            'date' => $request->date,
            'title' => $request->title,
            'description' => $request->description,
            'doctor_id'=>$request->doctor_name,
            'investigation_img'=>'image',
            'investigation_img'=>$image_name,
        ]);
        return redirect()->route('investigations.index')->with(Toastr::success('investigation created successfully'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $investigations=Investigation::find($id);
        return view('admin.pages.hospital activities.investigation.view', compact('investigations'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $investigations=Investigation::find($id);
        $doctor = Doctor::all();
        return view('admin.pages.hospital activities.investigation.edit', compact('investigations','doctor'));
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
        $investigations=Investigation::find($id);

        $image_name=$investigations->investigation_img;
        if($request->hasFile('investigation_img'))
        {
            $image_name=date('Ymdhis').'.'.$request->file('investigation_img')->getClientOriginalExtension();
            $request->file('investigation_img')->storeAs('/uploads/investigations',$image_name);
        }

        $investigations->update([
            'patient_id'=>$request->patient_id,
            'date' => $request->date,
            'title' => $request->title,
            'description' => $request->description,
            'doctor_id'=>$request->doctor_name,
            'investigation_img'=>'image',
            'investigation_img'=>$image_name,
        ]);
        return redirect()->route('investigations.index')->with(Toastr::info('investigation updated successfully'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Investigation::find($id)->delete();
        return redirect()->route('investigations.index')->with(Toastr::error('investigation has been deleted'));
    }
}

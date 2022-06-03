<?php

namespace App\Http\Controllers\Admin\Activities;

use App\Models\Doctor;
use Illuminate\Http\Request;
use App\Models\Investigation;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class InvestigationReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $investigations=Investigation::all();
        return view('admin.pages.hospital activities.investigation.index', compact('investigations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $doctor=Doctor::all();
        return view('admin.pages.hospital activities.investigation.create', compact('doctor'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Investigation::create([
            'patient_id'=>$request->patient_id,
            'date' => $request->date,
            'title' => $request->title,
            'description' => $request->description,
            'doctor_id'=>$request->doctor_name,
            'investigation_img'=>'image',
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
        $investigations->update([
            'patient_id'=>$request->patient_id,
            'date' => $request->date,
            'title' => $request->title,
            'description' => $request->description,
            'doctor_id'=>$request->doctor_name,
            'investigation_img'=>'image',
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

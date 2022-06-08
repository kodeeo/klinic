<?php

namespace App\Http\Controllers\Admin\Activities;

use App\Models\Doctor;
use Illuminate\Http\Request;
use App\Models\OperationActivity;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class OperationalReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $operationReport = OperationActivity::all();
        return view('admin.pages.hospital activities.operational report.index', compact('operationReport'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $doctor=Doctor::all();
        return view('admin.pages.hospital activities.operational report.create', compact('doctor'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        OperationActivity::create([
            'patient_id'=>$request->patient_id,
            'date' => $request->date,
            'title' => $request->title,
            'description' => $request->description,
            'doctor_id'=>$request->doctor_name,
        ]);
        return redirect()->route('operational_activities.index')->with(Toastr::success('Operation report create successfully'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $operationReport=OperationActivity::find($id);
        return view('admin.pages.hospital activities.operational report.view', compact('operationReport'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $operationReport=OperationActivity::find($id);
        $doctor=Doctor::all();
        return view('admin.pages.hospital activities.operational report.edit', compact('operationReport', 'doctor'));
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
        $operationReport=OperationActivity::find($id);
        $operationReport::update([
            'patient_id'=>$request->patient_id,
            'date' => $request->date,
            'title' => $request->title,
            'description' => $request->description,
            'doctor_id'=>$request->doctor_name,
            
        ]);
        return redirect()->route('operational_activities.index')->with(Toastr::info('Operation report has been updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        OperationActivity::find($id)->delete();
        return redirect()->route('operational_activities.index')->with(Toastr::error('Operation report has been deleted'));
    }
}

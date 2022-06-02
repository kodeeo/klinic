<?php

namespace App\Http\Controllers\Admin\Activities;

use App\Http\Controllers\Controller;
use App\Models\BirthReport;
use App\Models\Doctor;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class BirthreportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $birthReport=BirthReport::all();
        return view('admin.pages.hospital activities.birth report.index', compact('birthReport'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $doctor=Doctor::all();
        return view('admin.pages.hospital activities.birth report.create', compact('doctor'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        BirthReport::create([
            'patient_id'=>$request->patient_id,
            'date' => $request->date,
            'title' => $request->title,
            'description' => $request->description,
            'doctor_id'=>$request->doctor_name,
            'status' => $request->status
        ]);
        return redirect()->route('birth_report.index')->with(Toastr::success('Birth report created successfully'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $birthReport=BirthReport::find($id);
        return view('admin.pages.hospital activities.birth report.view', compact('birthReport'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $birthReport=BirthReport::find($id);
        $doctor = Doctor::all();
        return view('admin.pages.hospital activities.birth report.edit', compact('birthReport','doctor'));
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
        $birthReport=BirthReport::find($id);
        $birthReport->update([
            'patient_id'=>$request->patient_id,
            'date' => $request->date,
            'title' => $request->title,
            'description' => $request->description,
            'doctor_id'=>$request->doctor_name,
            // 'status' => $request->status
        ]);
        return redirect()->route('birth_report.index')->with(Toastr::info('Birth report updated successfully'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        BirthReport::find($id)->delete();
        return redirect()->route('birth_report.index')->with(Toastr::error('Birth report has been deleted'));
    }
}

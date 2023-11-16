<?php

namespace App\Http\Controllers\Admin\Activities;

use App\Models\Doctor;
use App\Models\Patient;
use App\Models\BirthReport;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class BirthreportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $birthReport = BirthReport::all();
        return view('admin.pages.hospital activities.birth report.index', compact('birthReport'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $doctor = Doctor::all();
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
        // dd($request->all());
        $request->validate([
            'patient_id' => 'required',
            'date' => 'required',
            'title' => 'required',
            'description' => 'required',
            'doctor_id' => 'required',
        ]);

        $patient = Patient::where('patient_id', $request->patient_id)->first();
        if ($patient) {
            BirthReport::create([
                'patient_id' => $request->patient_id,
                'date' => $request->date,
                'title' => $request->title,
                'description' => $request->description,
                'doctor_id' => $request->doctor_id,
            ]);
            return redirect()->route('birth_report.index')->with(Toastr::success('Birth report created successfully'));
        } else {
            return redirect()->back()->with(Toastr::error('No Patient Found'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $birthReport = BirthReport::find($id);
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
        $birthReport = BirthReport::find($id);
        $doctor = Doctor::all();
        return view('admin.pages.hospital activities.birth report.edit', compact('birthReport', 'doctor'));
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
        // dd($request->all());
        $request->validate([
            'patient_id' => 'required',
            'date' => 'required',
            'title' => 'required',
            'description' => 'required',
            'doctor_id' => 'required',
        ]);

        $patient = Patient::where('patient_id', $request->patient_id)->first();
        if ($patient) {
            $birthReport = BirthReport::find($id);
            $birthReport->update([
                'patient_id' => $request->patient_id,
                'date' => $request->date,
                'title' => $request->title,
                'description' => $request->description,
                'doctor_id' => $request->doctor_id,
            ]);
            return redirect()->route('birth_report.index')->with(Toastr::info('Birth report updated successfully'));
        } else {
            return redirect()->back()->with(Toastr::error('No Patient Found'));
        }
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

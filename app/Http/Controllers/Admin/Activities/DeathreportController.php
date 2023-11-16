<?php

namespace App\Http\Controllers\Admin\Activities;

use App\Models\Doctor;
use App\Models\BirthReport;
use App\Models\DeathReport;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Patient;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Validator;

class DeathreportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $deathReport = DeathReport::all();
        return view('admin.pages.hospital activities.death report.index', compact('deathReport'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $doctor = Doctor::all();
        return view('admin.pages.hospital activities.death report.create', compact('doctor'));
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
            'date' => 'required|date',
            'title' => 'required',
            'cause_of_death' => 'required',
            'doctor_id' => 'required',
        ]);
        // dd('achi');
        $patient = Patient::where('patient_id', $request->patient_id)->first();
        // dd($patient);
        if ($patient) {
            // dd('ache');
            DeathReport::create([
                'patient_id' => $request->patient_id,
                'date' => $request->date,
                'title' => $request->title,
                'cause_of_death' => $request->cause_of_death,
                'doctor_id' => $request->doctor_id,
            ]);
            return redirect()->route('death_report.index')->with(Toastr::success('Death report added successfully'));
        } else {
            // dd('nai');
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
        $deathReport = DeathReport::find($id);
        return view('admin.pages.hospital activities.death report.view', compact('deathReport'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $deathReport = DeathReport::find($id);
        $doctor = Doctor::all();
        return view('admin.pages.hospital activities.death report.edit', compact('deathReport', 'doctor'));
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

        $request->validate([
            'patient_id' => 'required',
            'date' => 'required|date',
            'title' => 'required',
            'cause_of_death' => 'required',
            'doctor_id' => 'required',
        ]);
        // dd($request->all());
        $patient = Patient::where('patient_id', $request->patient_id)->first();
        // dd($patient);
        if ($patient) {
            $deathReport = DeathReport::find($id);
            $deathReport->update([
                'patient_id' => $request->patient_id,
                'date' => $request->date,
                'title' => $request->title,
                'cause_of_death' => $request->cause_of_death,
                'doctor_id' => $request->doctor_id,
            ]);
            return redirect()->route('death_report.index')->with(Toastr::info('Death report updated successfully'));
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
        DeathReport::find($id)->delete();
        return redirect()->route('death_report.index')->with(Toastr::error('Death report has been deleted'));
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Models\PrescriptionMedicine;
use App\Models\PrescriptionTest;
use Carbon\Carbon;
use App\Models\Test;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Medicine;
use App\Models\Appointment;
use App\Models\ClinicSetup;
use App\Models\Prescription;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Insurance;
use Brian2694\Toastr\Facades\Toastr;

class PrescriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {
        $prescriptions = Prescription::with('patient', 'insurance')->get();

        return view('admin.pages.prescription.index', compact('prescriptions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return view
     */
    public function create()
    {

        $doctor = Doctor::all();
        $medicines = Medicine::all();
        $tests = Test::all();
        $insurance = Insurance::all();
        return view('admin.pages.prescription.create', compact('doctor', 'medicines', 'tests', 'insurance'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // dd($request->all()); 
        // $request->validate([
        //     'unique_patient_id'=>'required',
        //     'patient_name'=>'required',
        //     'weight'=>'required',
        //     'blood_pressure'=>'required',
        //     'reference'=>'required',
        // ]);
        $patient = Patient::where('patient_id', $request->patient_id)->first();
        if ($patient) {
            $prescription = Prescription::create([
                'doctor_id' => auth()->user()->id,
                'patient_id' => $request->patient_id,
                'weight' => $request->weight,
                'blood_pressure' => $request->blood_pressure,
                'reference' => $request->reference,
                'fees' => $request->fees,
                'patient_note' => $request->patient_note,
                'complain' => $request->complain,
                'insurance_id' => $request->insurance_id,
            ]);
            foreach ($request->medicine['id'] as $key => $data) {
                //create prescription medicine
                PrescriptionMedicine::create([
                    'prescription_id' => $prescription->id,
                    'medicine_id' => $data,
                    'does' => $request->medicine['medicine_instruction'][$key],
                    'days' => $request->medicine['days'][$key],
                ]);
            }
            //create prescription test
            foreach ($request->test['id'] as $key => $data) {
                PrescriptionTest::create([
                    'prescription_id' => $prescription->id,
                    'test_id' => $data,
                ]);
            }

            Toastr::success('Prescription Created Successfully.');
            return redirect()->route('prescription.index');
        } else {
            Toastr::error('No Patient Found');
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

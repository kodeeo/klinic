<?php

namespace App\Http\Controllers\Admin;
use PDF;
use App\Models\Doctor;
use App\Models\Department;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class DoctorController extends Controller
{

    public function getDoctor($department)
    {
        $doctors=Doctor::where('department_id',$department)->get();
        return response()->json([
            'data'=>$doctors
        ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctors=Doctor::paginate(10);

         return view('admin.pages.doctor.index',compact('doctors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $department=Department::all();
        $blood=['A+','A-','B+','B-','O+','O-','AB+','AB-'];

        return view('admin.pages.doctor.create',compact('department','blood'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $image_name=null;
        if($request->hasFile('doctor_image'))
        {
            $image_name=date('Ymdhis').'.'.$request->file('doctor_image')->getClientOriginalExtension();
            $request->file('doctor_image')->storeAs('/uploads/doctors',$image_name);
        }

        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'username'=>'required',
            'email'=>'required',
            'mobile'=>'required',
            'address'=>'required',
            'date_of_birth'=>'required',
            'gender'=>'required',
            'department_id'=>'required',
            'specialist'=>'required',
            'degree'=>'required',
            'password'=>'required',

        ]);
        Doctor::create([
            'first_name'=>$request->first_name,   
            'last_name'=>$request->last_name,   
            'username'=>$request->username,   
            'email'=>$request->email,
            'phone'=>$request->phone,
            'mobile'=>$request->mobile,
            'address'=>$request->address,
            'date_of_birth'=>$request->date_of_birth,
            'gender'=>$request->gender,
            'blood_group'=>$request->blood_group,
            'department_id'=>$request->department_id,
            'degree'=>$request->degree,
            'bio'=>$request->bio,
            'password'=>bcrypt($request->password),
            'image'=>$image_name,


        ]);
        Toastr::success('Doctor Added Successfully');
        return redirect()->route('doctor.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $doctor=Doctor::find($id);
        return view('admin.pages.doctor.view',compact('doctor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {    
        $blood=['A+','A-','B+','B-','O+','O-','AB+','AB-'];
        $doctor=Doctor::find($id);
        $department=Department::all();
        return view('admin.pages.doctor.edit',compact('doctor','department','blood'));
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
        $doctor=Doctor::find($id);
        $image_name=$doctor->image;
                if($request->hasFile('doctor_image'))
                {
                    $image_name=date('Ymdhis') .'.'. $request->file('doctor_image')->getClientOriginalExtension();
                    $request->file('doctor_image')->storeAs('/uploads/doctors',$image_name);
                }
        
        $doctor->update([
            'name'=>$request->name,   
            'email'=>$request->email,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'date_of_birth'=>$request->date_of_birth,
            'gender'=>$request->gender,
            'department_id'=>$request->department_id,
            'designation'=>$request->designation,
            'degree'=>$request->degree,
            'details'=>$request->details,
            'password'=>bcrypt($request->password),
            'image'=>$image_name,
        ]);
        Toastr::success('Doctor Updated Successfully');
        return redirect()->route('doctor.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Doctor::find($id)->delete();
        Toastr::error('Doctor Deleted Successfully');
        return redirect()->back();        
    }

    public function doctorPdf($id)
    {
        $doctor=Doctor::find($id);
        $pdf=PDF::loadView('admin.pages.doctor.profile_pdf',compact('doctor'));
        return $pdf->download('doctor.pdf');
    }
}

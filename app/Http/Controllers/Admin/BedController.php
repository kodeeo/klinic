<?php

namespace App\Http\Controllers\Admin;

use DateTime;
use App\Models\Bed;
use App\Models\Ward;
use App\Models\AssignBed;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Validator;

class BedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $beds=Bed::with('ward')->paginate(3);
        return view('admin.pages.bed.index',compact('beds'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $wards=Ward::all();
        return view('admin.pages.bed.create',compact('wards'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validate=Validator::make($request->all(),[

            'type'=>'required',
            'ward_id'=>'required',
            'description'=>'required',
            'capacity'=>'required',
            'cabin_type'=>'required',
            'charge'=>'required',
            'status'=>'required'

            ]);

        
        if($validate->fails()){

            Toastr::error('Validation failed.');
            return redirect()->back();
        }
        Bed::create([
            'type'=>$request->type,
            'ward_id'=>$request->ward_id,
            'description'=>$request->description,
            'capacity'=>$request->capacity,
            'cabin_type'=>$request->cabin_type,
            'charge'=>$request->charge,
            'status'=>$request->status,
        ]);

   
        Toastr::success('Bed Type Added');
        return redirect()->route('beds.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bed=Bed::find($id);
        return view('admin.pages.bed.view',compact('bed'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $wards=Ward::all();
        $beds=Bed::find($id);
        $capacity=['single','double'];
        $cabintype=['ac','non ac'];
        $bedtype=['bed','cabin'];
        return view('admin.pages.bed.edit',compact('beds','wards','capacity','cabintype','bedtype'));
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

        
        $validate=Validator::make($request->all(),[

            'type'=>'required',
            'ward_id'=>'required',
            'description'=>'required',
            'capacity'=>'required',
            'cabin_type'=>'required',
            'charge'=>'required',
            

            ]);

        
        if($validate->fails()){

            Toastr::error('Validation failed.');
            return redirect()->back();
        }
        $beds=Bed::find($id);
        $beds->update([
            'type'=>$request->type,
            'description'=>$request->description,
            'capacity'=>$request->capacity,
            'charge'=>$request->charge,
            'ward_id'=>$request->ward_id,
            'cabin_type'=>$request->cabin_type,
            
        ]);
        Toastr::success('Bed Updated Successfully');
        return redirect()->route('beds.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $beds=Bed::find($id)->delete();
        Toastr::error('Bed Deleted Successfully');
        return redirect()->back();
    }




    public function assigned_bed_index()
    {
        $assign_beds=AssignBed::with(['ward','bed'])->paginate(3);
// ($assign_beds[0]);
        return view('admin.pages.bed.assign.index',compact('assign_beds'));
    }
    



    public function select_ward()
    {
        $ward=Ward::all();

        return view('admin.pages.bed.assign.ward',compact('ward'));
    }




    public function assign_bed($id){
      
        $ward=Ward::find($id);
        $wards=Ward::all();
      
          $beds=Bed::where('type','=','bed')->where('ward_id','=',$id)->where('status','=','available')->get();
       
        $cabins=Bed::where('type','=','cabin')->where('ward_id','=',$id)->where('status','=','available')->get();
        $bedstatus=Bed::find($id);

        return view('admin.pages.bed.assign.create',compact('beds','cabins','ward','wards','bedstatus'));
    }





    public function assign_bed_store(Request $request,$id)
    {

        $validate=Validator::make($request->all(),[

            'patient_id'=>'required',
            'ward_id'=>'required',
            'bed_id'=>'required',
            'assign_date'=>'required|date|after_or_equal:today',
            'description'=>'required',
          ]);

        if($validate->fails()){

            Toastr::error('Validation failed.');
            return redirect()->back();
        }

        AssignBed::create([

            'patient_id'=>$request->patient_id,
            'ward_id'=>$request->ward_id,
            'bed_id'=>$request->bed_id,
            'assign_date'=>$request->assign_date,
            'description'=>$request->description,
        ]);

        $bedstatus=Bed::find($id);
        $bedstatus->status='booked';
        $bedstatus->save();
        Toastr::success('Bed Stored Successfully');
         return redirect()->route('assign.bed.index');
    }



    public function assign_bed_edit($id){
        
        $find=AssignBed::find($id);
        $wards=Ward::all();
        $capacity=['single','double'];
        $cabintype=['ac','non ac'];
        $bedtype=['bed','cabin'];
        $beds=Bed::where('type','=','bed')->where('ward_id','=',$id)->where('status','=','available')->get();
        $cabins=Bed::where('type','=','cabin')->where('ward_id','=',$id)->where('status','=','available')->get();
        $bedstatus=Bed::find($id);
        return view('admin.pages.bed.assign.edit',compact('find','wards','capacity','cabintype','bedtype','beds','cabins','bedstatus'));
    }





    public function assign_bed_update(Request $request, $id){

        $assign_bed=AssignBed::find($id);
        $assign_bed->update([

            'patient_id'=>$request->patient_id,
            'ward_id'=>$request->ward_id,
            'bed_id'=>$request->bed_id,
            'assign_date'=>$request->assign_date,
            'description'=>$request->description,
        ]);

        $bedstatus=Bed::find($id);
        $bedstatus->status='booked';
        $bedstatus->save();
        Toastr::success('Assign bed updated Successfully');
         return redirect()->route('assign.bed.index');   
    }




    public function assign_bed_show($id){
        $assignbed=AssignBed::find($id);

        return view('admin.pages.bed.assign.show',compact('assignbed'));
    }





    public function assign_bed_delete($id){

        
        AssignBed::find($id)->delete();
        // $bedstatus=Bed::find($id);
        // $bedstatus->status='available';
        // $bedstatus->save();

       
        Toastr::error('Assign bed deleted Successfully');
        return redirect()->route('assign.bed.index');
        
    }
    
}
           
           


    
      
      



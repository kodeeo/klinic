<?php

namespace App\Http\Controllers\Admin;

use DateTime;
use App\Models\Bed;
use App\Models\Ward;
use App\Models\AssignBed;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

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
        $beds=Bed::find($id);
        $beds->update([
            'type'=>$request->type,
            'description'=>$request->description,
            'capacity'=>$request->capacity,
            'charge'=>$request->charge,
            'ward_id'=>$request->ward_id,
            'cabin_type'=>$request->cabin_type,
            'status'=>$request->status,
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
        $assign_beds=AssignBed::with(['ward','bed'])->get();
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
         return redirect()->route('assign.bed.index');
    }
    public function assign_bed_edit($id){
        $find=AssignBed::find($id);
        return view('admin.pages.bed.assign.edit',compact('find'));
    }

    public function assign_bed_delete($id){

        AssignBed::find($id)->delete();

        return redirect()->route('assign.bed.index');
        
    }
    
}
           
           


    
      
      



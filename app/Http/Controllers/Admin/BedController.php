<?php

namespace App\Http\Controllers\Admin;

use DateTime;
use App\Models\Bed;
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
        $beds=Bed::all();
        return view('admin.pages.bed.index',compact('beds'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.bed.create');
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
            'description'=>$request->description,
            'capacity'=>$request->capacity,
            'charge'=>$request->charge,
            'status'=>$request->status,
        ]);
        return redirect()->route('beds.index')->with(Toastr::success('Bed Type Added'));;
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
        $beds=Bed::find($id);
        return view('admin.pages.bed.edit',compact('beds'));
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
            'status'=>$request->status,
        ]);
        return redirect()->route('beds.index')->with(Toastr::success('Bed Updated Successfully'));
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
        return redirect()->back()->with(Toastr::error('Bed Deleted Successfully'));
    }

    public function assigned_bed_index()
    {
        $assign_beds=AssignBed::with('beds')->get();
        return view('admin.pages.bed.assign.index',compact('assign_beds'));
    }
    
    public function assign_bed_create()
    {
        $bed_types=Bed::all();
        return view('admin.pages.bed.assign.create',compact('bed_types'));
    }

    public function assign_bed_store(Request $request)
    {
        $from=new DateTime($request->assign_date);
        $to=new DateTime($request->discharge_date);
        $days= (($from->diff($to))->format('%a'))+1;

        AssignBed::create([

            'patient_id'=>$request->patient_id,

            'bed_type_id'=>$request->bed_type_id,
            'assign_date'=>$request->assign_date,
            'discharge_date'=>$request->discharge_date,
            'days'=>$days,
            'description'=>$request->description,
            'assigned_by'=>auth()->user()->role->name,
        ]);

        $beds=Bed::where('id',$request->bed_type_id)->first();

        $beds->update([
            'capacity'=>$beds->capacity-1
        ]);

        return redirect()->route('assign.bed.index');
    }

}

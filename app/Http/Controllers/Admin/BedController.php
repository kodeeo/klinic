<?php

namespace App\Http\Controllers\Admin;

use App\Models\Bed;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Bed_Assign;
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
        //
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
    
    public function assign_bed()
    {
        $bed_types=Bed::all();
        return view('admin.pages.bed.assign_bed',compact('bed_types'));
    }

    public function assign_bed_store(Request $request)
    {
        Bed_Assign::create([
            'patient_id'=>$request->patient_id,
            'bed_type_id'=>$request->bed_type,
            'assign_date'=>$request->assign_date,
            'discharge_date'=>$request->discharge_date,
            'description'=>$request->description,
            'status'=>$request->status,
        ]);
        return 'ok';
    }

}

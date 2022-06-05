<?php

namespace App\Http\Controllers\Admin;

use App\Models\Designation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Symfony\Component\Console\Descriptor\Descriptor;

class DesignationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $designations=Designation::paginate(10);
        return view('admin.pages.designation.index',compact('designations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'designation'=>'required',
            'details'=>'required',

        ]);
        Designation::create([
            'designation'=>$request->designation,
            'details'=>$request->details,
            

        ]);
        Toastr::success('Designation Added Successfully');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $designations=Designation::find($id);
        return view('admin.pages.designation.view',compact('designations'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $designations=Designation::find($id);
        return view('admin.pages.designation.edit',compact('designations'));
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
        $designations=Designation::find($id);
        $designations->update([

            'designation'=>$request->designation,
            'details'=>$request->details,
            
        ]);

        Toastr::success('Designation Updated Successfully', 'success');
        return redirect()->route('designation.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Designation::find($id)->delete();
        Toastr::error('Designation Deleted Successfully');
        return redirect()->back(); 
    }
}

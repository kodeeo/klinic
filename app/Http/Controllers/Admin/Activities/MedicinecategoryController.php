<?php

namespace App\Http\Controllers\Admin\Activities;

use App\Models\Doctor;
use Illuminate\Http\Request;
use App\Models\MedicineCategory;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class MedicinecategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medicine_category=MedicineCategory::all();
        return view('admin.pages.hospital activities.medicine_category.index', compact('medicine_category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $medicine_category=MedicineCategory::all();
        return view('admin.pages.hospital activities.medicine_category.create', compact('medicine_category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        MedicineCategory::create([
            'name'=>$request->name,
            'description' => $request->description,
        ]);
        return redirect()->route('medicine_category.index')->with(Toastr::success('Medicine category created successfully'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $medicine_category=MedicineCategory::find($id);
        return view('admin.pages.hospital activities.medicine_category.view', compact('medicine_category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $medicine_category=MedicineCategory::find($id);
        $doctor = Doctor::all();
        return view('admin.pages.hospital activities.medicine_category.edit', compact('medicine_category','doctor'));
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
        $medicine_category=MedicineCategory::find($id);
        $medicine_category->update([
            'name'=>$request->name,
            'description' => $request->description,
        ]);
        return redirect()->route('medicine_category.index')->with(Toastr::info('Medicine category updated successfully'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        MedicineCategory::find($id)->delete();
        return redirect()->route('medicine_category.index')->with(Toastr::error('Medicine category has been deleted'));
    }
}

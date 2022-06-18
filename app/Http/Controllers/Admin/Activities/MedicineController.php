<?php

namespace App\Http\Controllers\Admin\Activities;

use App\Models\Doctor;
use App\Models\Medicine;
use Illuminate\Http\Request;
use App\Models\MedicineCategory;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class MedicineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medicine=Medicine::all();
        return view('admin.pages.hospital activities.medicine.index', compact('medicine'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $medicine=Medicine::all();
        $medicine_category=MedicineCategory::all();
        return view('admin.pages.hospital activities.medicine.create', compact('medicine','medicine_category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Medicine::create([
            'name'=>$request->name,
            'category_id'=>$request->category_id,
            'description' => $request->description,
            'price'=>$request->price,
            'manufactured_by'=>$request->manufactured_by,
        ]);
        return redirect()->route('medicine.index')->with(Toastr::success('Medicine created successfully'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $medicine=Medicine::find($id);
        return view('admin.pages.hospital activities.medicine.view', compact('medicine'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $medicine=Medicine::find($id);
        $medicine_category=MedicineCategory::all();
        return view('admin.pages.hospital activities.medicine.edit', compact('medicine','medicine_category'));
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
        $medicine=Medicine::find($id);
        $medicine->update([
            'name'=>$request->name,
            'category_id'=>$request->category_id,
            'description' => $request->description,
            'price'=>$request->price,
            'manufactured_by'=>$request->manufactured_by,
        ]);
        return redirect()->route('medicine.index')->with(Toastr::info('Medicine updated successfully'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Medicine::find($id)->delete();
        return redirect()->route('medicine.index')->with(Toastr::error('Medicine has been deleted'));
    }
}

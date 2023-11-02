<?php

namespace App\Http\Controllers;

use App\Models\Medicine;
use App\Models\MedicinePurchase;
use Illuminate\Http\Request;

class MedicinePurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $buymedicine=MedicinePurchase::paginate(2);
        return view('admin.pages.medicine_purchase.index',compact('buymedicine'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $medicines=Medicine::all();
        return view('admin.pages.medicine_purchase.create',compact('medicines'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $medicines=$request->medicine_id;
        $quantity=$request->quantity;

        foreach ($medicines as $key => $data) {
            
            MedicinePurchase::create([
    
                'patient_id'=>$request->patient_id,
                'medicine_id'=>$request->medicine_id[$key],
                'quantity'=>$request->medicine_quantity[$key],
                'total'=>500,
                
       

        ]);
    }

        return redirect()->route('medicine_purchase.index');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

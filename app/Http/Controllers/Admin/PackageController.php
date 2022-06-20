<?php

namespace App\Http\Controllers\Admin;

use App\Models\Package;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $packages=Package::all();
        $services=Service::all();
        return view('admin.pages.packages.index',compact('packages','services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $services=Service::all();
        return view('admin.pages.packages.create',compact('services'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $services=$request->service_id;
        $quantity=$request->quantity;
        $rate=$request->rate;

        foreach($services as $key=>$service){

            Package::create([
                'name'=>$request->name,
                'description'=>$request->description,
                'service_id'=>$request->service_id[$key],
                'service_quantity'=>$request->service_quantity[$key],
                'service_rate'=>$request->service_rate[$key],
                'discount'=>$request->discount,
                'status'=>$request->status,
            ]);
            
        }

        return redirect()->route('packages.index')->with(Toastr::success('Package Added Successfully'));
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

    public function statusUpdate(Request $request,$id){
        $packages=Package::find($id);
        if($packages){
            $packages->update([
                'status'=>$request->status,
            ]);
        }
        return redirect()->back();
}
}

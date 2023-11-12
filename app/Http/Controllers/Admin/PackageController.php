<?php

namespace App\Http\Controllers\Admin;

use App\Models\Package;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class PackageController extends Controller
{
   
    public function index()
    {   
        $packages=Package::with('service')->get();
        // $services=Service::all();
        return view('admin.pages.packages.index',compact('packages'));
    }

   
    public function create()
    {
        $services=Service::all();
        return view('admin.pages.packages.create',compact('services'));
    }

   
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
                'service_quantity'=>($request->service_quantity[$key]),
                'service_rate'=>($request->service_rate[$key]),
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
        $service=Package::find($id);
        return view('admin.pages.packages.show',compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $package=Package::find($id);
       
        return view('admin.pages.packages.edit',compact('package'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Package::find($id)->delete();
        Toastr::error('Package Deleted Successfully');
        return redirect()->back(); 
        
    }

    public function statusUpdate(Request $request,$id){
        $packages=Package::find($id);
        if($packages){
            $packages->update([
                'name'=>$request->name,
                'status'=>$request->status,
                'description'=>$request->description,
               
                'discount'=>$request->discount,
            ]);
        }
        return redirect()->back();
}
}

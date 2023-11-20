<?php

namespace App\Http\Controllers\Admin;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class ServiceController extends Controller
{
   
    public function index()
    {
        $services=Service::paginate(10);
         return view('admin.pages.services.index',compact('services'));
    }

    public function create()
    {
        return view('admin.pages.services.create');
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
            'name' => 'required',
        ]);
        Service::create([
            'name'=>$request->name,
            'description'=>$request->description,
            'rate'=>$request->rate,
        ]);
        return redirect()->route('services.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $service=Service::find($id);
        return view('admin.pages.services.show',compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service=Service::find($id);
        return view('admin.pages.services.edit',compact('service'));
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
        $service=Service::find($id);
         $service->update([
            'name'=>$request->name,
            'description'=>$request->description,
            'rate'=>$request->rate,
         ]);
         return redirect()->route('services.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Service::find($id)->delete();
        return redirect()->back()->with(Toastr::error('Service Deleted Successfully'));
    }

    public function statusUpdate(Request $request,$id){
        // dd($request->all());
        $services=Service::find($id);
        if($services){
            $services->update([
                'status'=>$request->status,
            ]);
        }
        return redirect()->back();
    }
}

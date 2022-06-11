<?php

namespace App\Http\Controllers\Admin;

use App\Models\Cabin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class CabinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cabin=Cabin::paginate(10);
        return view('admin.pages.cabin.index',compact('cabin'));
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
        // dd($request->all());

        $quantity=$request->quantity;
    
        // dd($request->all());
        $request->validate([
            'cabin_number'=>'required',         
        ]);
    
    
        // dd($request->all());
        $request->validate([
            'cabin_number'=>'required',         
        ]);
        for ($x = 0; $x < $quantity; $x++) {
                $cabin=([
                'cabin_number'=>$request->cabin_number+$x
            ]);
            Cabin::insert($cabin);
        }
        
        Toastr::success('Cabin Added Successfully');
        

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
        $cabin=Cabin::find($id);
        return view('admin.pages.cabin.view', compact('cabin'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cabin=Cabin::find($id);

          return view('admin.pages.cabin.edit',compact('cabin'));
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
        $cabin=Cabin::find($id);
        $cabin->update([

            'cabin_number'=>$request->cabin_number,
            'admission_id'=>$request->admission_id,
            'staff_id'=>$request->staff_id,
            'nurse_id'=>$request->nurse_id,
        ]);

        Toastr::success('Cabin Updated Successfully', 'success');


        return redirect()->route('cabin.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cabin::find($id)->delete();
        Toastr::error('Cabin Deleted Successfully');
        return redirect()->back();
    }
}

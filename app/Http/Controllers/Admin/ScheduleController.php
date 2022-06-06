<?php

namespace App\Http\Controllers\Admin;

use App\Models\Doctor;
use App\Models\Schedule;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schedule=Schedule::all();
        return view('admin.pages.schedule.index',compact('schedule'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $days=['Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'];
        $doctor=Doctor::all();
        return view('admin.pages.schedule.create',compact('doctor','days'));
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

                'days'=>'required',
                'doctor_id'=>'required' , 
                'patient_time'=>'required',
                'serial'=>'required',
                'status'=>'required',
                'fromtime'=>'required',
                'totime'=>'required'
        ]);
        //dd('\$request->all());
        $days=$request->days;
        $fromtime=$request->fromtime;
        $totime=$request->totime;
        // $time=[$fromtime,$totime];

        // $from=array_combine($days,$fromtime);
        // $to=array_combine($days,$totime);
        //  dd($item);

       
       
                // $assign_time=[$fromtime,$totime];
                // dd($fromtime,$totime,$assign_day);

          foreach($days as $key=>$day){
            Schedule::create([
                'days'=>$day,
                'doctor_id'=>$request->doctor_id,   
                'patient_time'=>$request->patient_time,
                'serial'=>$request->serial,
                'status'=>$request->status,
                'fromtime'=>$fromtime[$key],
                'totime'=>$totime[$key],
            ]);
            

          }  
       
    //     $assign=Schedule::where('doctor_id',$request->doctor_id)->first()
    //     ->where('days',$request->days)->get();
    //     // dd($assign);
        
        
    //     foreach($assign as $data){
    //         foreach($fromtime as $ftime){
    //             foreach($totime as $ttime){
    //                 $data->update([
                        
    //                     'fromtime'=>$ftime,
    //                     'totime'=>$ttime,

    //                 ]);
    //             }
                
    // }}
    Toastr::success('Schedule added Successfully', 'success');

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
        
        $schedule=Schedule::find($id);
        
        return view('admin.pages.schedule.view',compact('schedule'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        
        $days=['Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'];
        $serial=['sequential','timestamp'];
        $schedule=Schedule::find($id);
        $match=Schedule::where('doctor_id',$schedule->doctor_id)->get();
        // dd($match);
        $doctor=Doctor::all();
        return view('admin.pages.schedule.edit',compact('schedule','doctor','days','serial','match'));
        
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
        // dd($request->all());
        $days=$request->days;
        $fromtime=$request->fromtime;
        $totime=$request->totime;

        Schedule::where('doctor_id',$request->doctor_id)->delete();

        foreach($days as $key=>$day){
        Schedule::insert([
            'days'=>$day,
            'doctor_id'=>$request->doctor_id,   
            'patient_time'=>$request->patient_time,
            'serial'=>$request->serial,
            'status'=>$request->status,
            'fromtime'=>$fromtime[$key],
            'totime'=>$totime[$key],
        ]);
    }

    Toastr::success('Schedule Updated Successfully');
        return redirect()->route('schedule.index');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Schedule::find($id)->delete();
        Toastr::error('Schedule Deleted Successfully');
        return redirect()->back();  
    }
}

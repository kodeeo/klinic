<?php

namespace App\Http\Controllers\Admin;

use App\Models\Test;
use App\Models\AssignTest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Log;

class TestController extends Controller
{
    
    public function index()
    {
        $tests=Test::all();
        return view('admin.pages.diagonistic.test.index',compact('tests'));
    }

   
    public function create()
    {
        return view('admin.pages.diagonistic.test.create');
    }


    public function store(Request $request)
    {
        try{
            $request->validate([
                'name'=> 'required |string',
                'price'=> 'required |numeric',
                'procedure'=> 'required',
                'description'=> 'required',
            ]);
    
            $filename='';
            if($request->hasFile('image'))
            {
                $file=$request->file('image');
                $filename=date('Ymdhms').'.'.$file->getClientOriginalExtension();
                $file->storeAs('/uploads',$filename);
            }
    
            Test::create([
                'name'=>$request->name,
                'price'=>$request->price,
                'procedure'=>$request->procedure,
                'description'=>$request->description,
                'image'=>$filename
            ]);

        }catch(\Exception $e){
            Log::channel('custom')->error('Test'.$e->getMessage());
            Toastr::error('Something went wrong ! Please try again.');
            return redirect()->back();
        }
        Toastr::success('Test has been craeted successfully');
        return redirect()->route('tests.index');

      
    }


    public function show($id)
    {
        //
    }

  
    public function edit($id)
    {
        $test=Test::find($id);
        return view('admin.pages.diagonistic.test.edit',compact('test'));
    }

    public function update(Request $request, $id)
    {
        $test=Test::find($id);
        try{
            $request->validate([
                'name'=> 'required |string',
                'price'=> 'required |numeric',
                'procedure'=> 'required',
                'description'=> 'required',
            ]);

            $filename=$test->image;
            //Check image or not
            if($request->hasFile('image'))
            {
                $file=$request->file('image');
                $filename=date('Ymdhms').'.'.$file->getClientOriginalExtension();
                $file->storeAs('/uploads',$filename);
            }
    
            $test->update([
                'name'=>$request->name,
                'price'=>$request->price,
                'procedure'=>$request->procedure,
                'description'=>$request->description,
                'image'=>$filename
    
            ]);
        }catch(\Exception $e){
            Log::channel('custom')->error('Test'.$e->getMessage());
            Toastr::error('Something went wrong ! Please try again.');
            return redirect()->back();
        }

        Toastr::success('Test updated Successfully', 'success');
        return redirect()->route('tests.index');
    }

  
    public function destroy($id)
    {
        Test::find($id)->delete();
        Toastr::error('Test deleted Successfully');
            return redirect()->route('tests.index');
    }

    public function assignTestIndex()
    {
        $assigntests=AssignTest::all();
        return view('admin.pages.diagonistic.test.assign.index',compact('assigntests'));
    }

    public function assignTestCreate()
    {
        $tests=Test::all();
        return view('admin.pages.diagonistic.test.assign.create',compact('tests'));
    }

    public function assignTestStore(Request $request)
    {
        $test_id=$request->test_id;
        // dd($test_id);
        foreach($test_id as $key=>$item)
        // dd($item);
        AssignTest::create([
            'patient_id'=>$request->patient_id,
            'test_id'=>$test_id[$key],
            'note'=>$request->note,
            'assigned_by'=>ucfirst(auth()->user()->username) 
        ]);

        Toastr::success('Test added Successfully', 'success');
        return redirect()->route('assign.test.index');
    }

}

<?php

namespace App\Http\Controllers\Admin\Activities;

use App\Models\Doctor;
use App\Models\Medicine;
use Illuminate\Http\Request;
use App\Models\MedicineCategory;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Exception;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class MedicineController extends Controller
{
    
    public function index()
    {
        $medicine=Medicine::all();
        return view('admin.pages.hospital activities.medicine.index', compact('medicine'));
    }

   
    public function create()
    {
        $medicine=Medicine::all();
       
        return view('admin.pages.hospital activities.medicine.create', compact('medicine'));
    }

    public function store(Request $request)
    {
        try{

            $validate=Validator::make($request->all(),[
                'name'            =>'required',
                'price'           =>'required',
                'manufactured_by' =>'required',
                'description'     =>'required',
            ]);
            if($validate->fails())
            {
                toastr()->error($validate->getMessageBag()->first());
            }
            Medicine::create([
                'name'            =>$request->name,
                'price'           =>$request->price,
                'manufactured_by' =>$request->manufactured_by,
                'description'     => $request->description,
            ]);
            Toastr::success('Medicine created successfully');
            return redirect()->route('medicine.index');
        }catch(Exception $e)
        {
            Log::channel('custom')->error('Medicine'.$e->getMessage());
            toastr()->error('somthing went wrong! Please try again.');
            return redirect()->back();
        }
    }


    public function show($id)
    {
        $medicine=Medicine::find($id);
        return view('admin.pages.hospital activities.medicine.view', compact('medicine'));
    }


    public function edit($id)
    {
        $medicine=Medicine::find($id);
        return view('admin.pages.hospital activities.medicine.edit', compact('medicine'));
    }

    public function update(Request $request, $id)
    {
        $medicine=Medicine::find($id);
        try{

            $validate=Validator::make($request->all(),[
                'name'            =>'required',
                'price'           =>'required',
                'manufactured_by' =>'required',
                'description'     =>'required',
            ]);
            if($validate->fails())
            {
                toastr()->error($validate->getMessageBag()->first());
            }
            Medicine::create([
                'name'            =>$request->name,
                'price'           =>$request->price,
                'manufactured_by' =>$request->manufactured_by,
                'description'     => $request->description,
            ]);
            Toastr::success('Medicine updated successfully');
            return redirect()->route('medicine.index');
        }catch(Exception $e)
        {
            Log::channel('custom')->error('Medicine'.$e->getMessage());
            toastr()->error('somthing went wrong! Please try again.');
            return redirect()->back();
        }
    }


    public function destroy($id)
    {
        Medicine::find($id)->delete();
        Toastr::error('Medicine has been deleted');
        return redirect()->route('medicine.index');
    }
}

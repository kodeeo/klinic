<?php

namespace App\Http\Controllers\Admin;

use App\Models\Department;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class DepartmentController extends Controller
{
    public function show()
    {
        $department=Department::all();

        return view('admin.pages.department.index',compact('department'));
    }
    public function store(Request $request)
    {
        $image_name=null;
        if($request->hasFile('department_image'))
        {
            $image_name=date('Ymdhis').'.'.$request->file('department_image')->getClientOriginalExtension();
            $request->file('department_image')->storeAs('/uploads/departments',$image_name);
        }
        $request->validate([
            'name'=>'required',
            'details'=>'required',

        ]);
        Department::create([
            'name'=>$request->name,
            'details'=>$request->details,
            'image'=>$image_name

        ]);
        Toastr::success('Department Added Successfully');

        return redirect()->back();
        
    }

    public function view($id)
      {
          $department=Department::find($id);

          return view('admin.pages.department.view', compact('department'));

      }
      public function edit($id)
      {
          $department=Department::find($id);

          return view('admin.pages.department.edit',compact('department'));

      }
      public function update(Request $request,$id)
      {


          $department=Department::find($id);
         

          $image_name=$department->image;
          //              step 1: check image exist in this request.
                  if($request->hasFile('department_image'))
                  {
                      // step 2: generate file name
                      $image_name=date('Ymdhis') .'.'. $request->file('department_image')->getClientOriginalExtension();
          
                      //step 3 : store into project directory
          
                      $request->file('department_image')->storeAs('/departments',$image_name);
          
                  }
          $department->update([

             'name'=>$request->name,
             'details'=>$request->details,
             'image'=>$image_name
         ]);

         Toastr::success('Department Updated Successfully', 'success');


         return redirect()->route('show.department');

      }
      public function delete($id)
      {
        Department::find($id)->delete();

        Toastr::error('Department Deleted Successfully');
          return redirect()->back();
      }
}

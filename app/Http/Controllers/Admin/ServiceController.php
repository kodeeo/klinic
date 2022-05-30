<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\ServiceModel;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    # view the form by which any tye of services may create 
     public function serviceForm(){
         return view('admin.pages.services.createForm');
     }

     #store the input data from sservice form 
     public function postService(Request $request){
        $request->validate([
            'name' => 'required|unique:service_models',
        ]);
        ServiceModel::create([
            'name'=>$request->name,
            'description'=>$request->description,
        ]);
        return redirect()->route('admin.service.list');
     }

     #showing the list of the services in the blade
     public function serviceList(){
         $services=ServiceModel::paginate(10);
        //  dd($services);
         return view('admin.pages.services.serviceList',compact('services'));
     }


     #service CRUD
     #service details
     public function serviceDetails($id){
        $service=ServiceModel::find($id);
        return view('admin.pages.services.serviceDetails',compact('service'));
     }

     #service Edit, service create form with the existing records
     public function serviceEdit($id){
         $service=ServiceModel::find($id);
        return view('admin.pages.services.serviceEdit',compact('service'));
     }

     #service Update
     public function serviceUpdate(Request $request, $id){
         $service=ServiceModel::find($id);
         $service->update([
            'name'=>$request->name,
            'description'=>$request->description,
         ]);
         return redirect()->route('admin.service.list');
     }

     #service delete
     public function serviceDelete($id){
        ServiceModel::find($id)->delete();
        return redirect()->back();
    }

    #status update
    public function statusUpdate(Request $request,$id){
        // dd($request->all());
        $services=ServiceModel::find($id);
        if($services){
            $services->update([
                'status'=>$request->status,
            ]);
        }
        return redirect()->back();
    }


     
}

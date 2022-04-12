<?php

namespace App\Http\Controllers\Admin;

use App\Models\Test;
use App\Models\TestCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class TestController extends Controller
{
    public function testList()
    {
        $tests=Test::with('category')->get();
        return view('admin.pages.diagonistic.test-list',compact('tests'));
    }

    public function testAdd()
    {
        $test_categories=TestCategory::all();
        return view('admin.pages.diagonistic.test-add',compact('test_categories'));
    }

    public function testStore(Request $request)
    {

        $filename='';
        if($request->hasFile('image'))
        {
            $file=$request->file('image');
            $filename=date('Ymdhms').'.'.$file->getClientOriginalExtension();
            $file->storeAs('/tests',$filename);
        }

        Test::create([
            'test_category_id'=>$request->test_category_id,
            'name'=>$request->name,
            'price'=>$request->price,
            'procedure'=>$request->procedure,
            'description'=>$request->description,
            'image'=>$filename

        ]);
        Toastr::success('Test added Successfully', 'success');
        return redirect()->route('test.list');
    }
    
}

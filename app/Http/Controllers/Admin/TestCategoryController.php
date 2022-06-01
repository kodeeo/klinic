<?php

namespace App\Http\Controllers\Admin;

use App\Models\TestCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class TestCategoryController extends Controller
{
    public function categoryList()
    {
        $test_categories=TestCategory::paginate(10);
        return view('admin.pages.diagonistic.test-category-list',compact('test_categories'));
    }

    public function categoryAdd()
    {
        return view('admin.pages.diagonistic.test-category-add');
    }

    public function categoryStore(Request $request)
    {
        TestCategory::create([

            'name'=>$request->name
        ]);

        Toastr::success('Test Category added Successfully', 'success');
        return redirect()->route('test.category.list');
    }

    public function categoryEdit($id){
        $test_category=TestCategory::find($id);
        return view('admin.pages.diagonistic.test-category-edit',compact('test_category'));
    }

    public function categoryUpdate(Request $request,$id){
        
        $test_category=TestCategory::find($id);

        $test_category->update([

            'name'=>$request->name
        ]);

        Toastr::success('Test Category updated Successfully', 'success');
        return redirect()->route('test.category.list');
    }

    public function categoryDelete($id){
        TestCategory::find($id)->delete();
        Toastr::success('Test Category deleted Successfully', 'success');
        return redirect()->route('test.category.list');
    }
}

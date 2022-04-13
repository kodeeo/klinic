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
        $test_categories=TestCategory::all();
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
}

<?php

namespace App\Http\Controllers\Admin\Bill;

use App\Http\Controllers\Controller;
use App\Models\Admission;
use App\Models\Bill;
use App\Models\Service;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class BillController extends Controller
{

    /**
     * @return Application|Factory|View
     */
    public function index(): Factory|View|Application
    {
        $bills=Bill::orderBy('id','desc')->get();
        return view('admin.pages.Bill.bill_list',compact('bills'));
    }


    /**
     * @return Application|Factory|View|RedirectResponse
     */
    public function create(): Factory|View|Application|RedirectResponse
    {

        if(request()->has('admission_id'))
        {
            $services=Service::where('status','active')->get();
            $admission=Admission::with(['patients','doctors'])->where('admission_id',\request()->admission_id)->first();
            return view('admin.pages.Bill.create_bill',compact('admission','services'));
        }
        toastr()->warning('No Admission ID Found.');
        return redirect()->back();
    }


    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}

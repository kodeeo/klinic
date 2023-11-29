<?php

namespace App\Http\Controllers\Admin\Bill;

use App\Http\Controllers\Controller;
use App\Models\Admission;
use App\Models\Bill;
use App\Models\BillDetails;
use App\Models\BillHistory;
use App\Models\Patient;
use App\Models\Service;
use Carbon\Carbon;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Throwable;

class BillController extends Controller
{

    /**
     * @return Application|Factory|View
     */
    public function index(): Factory|View|Application
    {
        $bills = Bill::orderBy('id', 'desc')->get();
        return view('admin.pages.bills.bill_list', compact('bills'));
    }

    public function bill($id)
    {

        $find = Patient::find($id);
        return view('admin.pages.bills.bill', compact('find'));
    }


    /**
     * @return Application|Factory|View|RedirectResponse
     */
    public function create(): Factory|View|Application|RedirectResponse
    {

        // if(request()->has('admission_id'))
        // {
        $services = Service::where('status', 'active')->get();
        // dd($services);
        // $admission=Admission::with(['patients','doctors'])->where('admission_id',request()->admission_id)->first();
        return view('admin.pages.bills.create_bill', compact('services'));
        // }
        // toastr()->warning('No Admission ID Found.');
        // return redirect()->back();
    }


    public function store(Request $request)
    {
        $validate = Validator::make($request->all(),[
            // 'patient_id' => 'required',
            // 'service.*' => 'required',
        ]);

        if ($validate->fails()) {

            toastr()->error($validate->getMessageBag());
            return redirect()->back()->withInput();
        }
        //for new bill -  create new bill
        try {

            DB::beginTransaction();
            $bill = Bill::create([
                'patient_id' => $request->patient_id,
                'bill_date' => $request->bill_date,
                'total_amount' => $request->total_amount,
                'payable_amount' => 100,
                'received_amount' => 100,
                'due_amount' => 100,
                'discount' => 100,
                'discount_type' => 'amount',
                'discount_amount' => 0,
                'extra_discount' => 0,
                'payment_method' => $request->payment_method,
                'transaction_id' => $request->receipt_no,
                'remarks' => $request->remarks,
                'created_by' => auth()->user()->id,
            ]);

            //create bill dettails with services
            foreach ($request->service as $service_id) {
                $service = Service::find($service_id);
                BillDetails::create([
                    'bill_id' => $bill->id,
                    'service_id' => $service_id,
                    'quantity' => 1,
                    'unit_amount' => $service->rate,
                    'subtotal_amount' => $service->rate * 1,
                    'discount' => 0,
                    'discount_amount' => 0,
                    'payable_subtotal_amount' => $service->rate * 1,
                    'delivery_date_time' => Carbon::now()->addDay(),
                ]);
            }

            //create new bill history
            BillHistory::create([
                'bill_id' => $bill->id,
                'received_amount' => 100,
                'payment_method' => $request->payment_method,
                'transaction_id' => $request->transaction_id,
                'remarks' => $request->remarks,
                'created_by' => auth()->user()->id,
            ]);

            DB::commit();
            toastr()->success('Bill created success');
            return redirect()->back();
        } catch (Throwable $ex) {
            DB::rollBack();

            toastr()->error($ex->getMessage());
            return redirect()->back();
        }
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

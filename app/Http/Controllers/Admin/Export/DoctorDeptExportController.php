<?php

namespace App\Http\Controllers\Admin\Export;

use Illuminate\Http\Request;
use App\Exports\DoctorDeptExport;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

class DoctorDeptExportController extends Controller
{
    public function csv()
    {
        return Excel::download(new DoctorDeptExport(),date('Y-m-d').'.csv');
    }

    public function excel()
    {
        return Excel::download(new DoctorDeptExport(),date('Y-m-d').'.xlsx');
    }

}

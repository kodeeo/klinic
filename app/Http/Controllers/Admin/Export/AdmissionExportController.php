<?php

namespace App\Http\Controllers\Admin\Export;

use App\Exports\AdmissionExport;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class AdmissionExportController extends Controller
{
    public function csv()
    {
        return Excel::download(new AdmissionExport(),date('Y-m-d').'.csv');
    }

    public function excel()

    {
        return Excel::download(new AdmissionExport(),date('Y-m-d').'.xlsx');
    }
}

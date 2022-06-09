<?php

namespace App\Http\Controllers\Admin\Export;

use App\Exports\NurseExport;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

class NurseExportController extends Controller
{
    public function csv()
    {
        return Excel::download(new NurseExport(),date('Y-m-d').'.csv');
    }

    public function excel()
    {
        return Excel::download(new NurseExport(),date('Y-m-d').'.xlsx');
    }

}

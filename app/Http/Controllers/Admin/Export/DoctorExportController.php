<?php

namespace App\Http\Controllers\Admin\Export;

use Illuminate\Http\Request;
use App\Exports\DoctorExport;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

class DoctorExportController extends Controller
{
    public function copy()
    {
        return Excel::download(new DoctorExport(),date('Y-m-d').'.csv');
    }

    public function excel()
    {
        return Excel::download(new DoctorExport(),date('Y-m-d').'.xlsx');
    }

    public function pdf()
    {
        return 'pdf';
    }

    public function print()
    {
        return 'print';
    }
}

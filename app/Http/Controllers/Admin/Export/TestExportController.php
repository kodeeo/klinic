<?php

namespace App\Http\Controllers\Admin\Export;

use App\Exports\TestExport;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

class TestExportController extends Controller
{
    public function csv()
    {
        return Excel::download(new TestExport(),date('Y-m-d').'.csv');
    }

    public function excel()
    {
        return Excel::download(new TestExport(),date('Y-m-d').'.xlsx');
    }

}

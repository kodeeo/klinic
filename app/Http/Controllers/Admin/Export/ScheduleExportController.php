<?php

namespace App\Http\Controllers\Admin\Export;

use App\Exports\ScheduleReportExport;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ScheduleExportController extends Controller
{
    public function csv(){
        return Excel::download(new ScheduleReportExport(),date("Y-m-d").'.csv');
    }
    public function excel()
    {
        return Excel::download(new ScheduleReportExport(),date('Y-m-d').'.xlsx');
    }

}

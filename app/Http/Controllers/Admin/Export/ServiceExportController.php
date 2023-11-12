<?php

namespace App\Http\Controllers\Admin\Export;

use App\Exports\ServiceExport;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ServiceExportController extends Controller
{
    public function csv(){

        return Excel::download(new ServiceExport(),date('Y-m-d').'.csv');
    }

    
    public function excel()
    {
        return Excel::download(new ServiceExport(),date('Y-m-d').'.xlsx');
    }

}

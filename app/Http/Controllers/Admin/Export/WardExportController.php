<?php

namespace App\Http\Controllers\Admin\Export;

use App\Exports\WardExport;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class WardExportController extends Controller
{
    public function csv(){

        return Excel::download(new WardExport(), date('Y-d-m').'.csv' );
    }

    public function excel(){

        return Excel::download(new WardExport(),date('Y-d-m').'.csv');
    }
}

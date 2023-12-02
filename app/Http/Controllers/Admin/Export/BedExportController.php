<?php

namespace App\Http\Controllers\Admin\Export;

use App\Exports\AssignbedExport;
use Illuminate\Http\Request;
use App\Exports\BedExport;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;


class BedExportController extends Controller
{
    public function csv(){

        return Excel::download(new BedExport(),date('Y-d-m').'.csv');
    }
  
    public function excel(){

        return Excel::download(new BedExport(),date('Y-d-m').'.xlsx');
    }

    public function assignbedexcel(){

        return Excel::download(new AssignbedExport(),date('Y-d-m').'.xlsx');
    }

    public function assignbedcsv(){

        return Excel::download(new AssignbedExport(),date('Y-d-m').'.csv');
    }

    

}

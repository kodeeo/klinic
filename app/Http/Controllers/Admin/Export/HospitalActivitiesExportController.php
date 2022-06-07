<?php

namespace App\Http\Controllers\Admin\Export;

use Illuminate\Http\Request;
use App\Exports\BirthReportExport;
use App\Exports\DeathReportExport;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\MedicineReportExport;
use App\Exports\OperationalReportExport;
use App\Exports\MedicineCategoryReportExport;

class HospitalActivitiesExportController extends Controller
{
    public function birth_csv()
    {
        return Excel::download(new BirthReportExport(),date('Y-m-d').'.csv');
    }

    public function birth_excel()
    {
        return Excel::download(new BirthReportExport(),date('Y-m-d').'.xlsx');
    }

    public function death_csv()
    {
        return Excel::download(new DeathReportExport(),date('Y-m-d').'.csv');
    }

    public function death_excel()
    {
        return Excel::download(new DeathReportExport(),date('Y-m-d').'.xlsx');
    }

    public function operational_csv()
    {
        return Excel::download(new OperationalReportExport(),date('Y-m-d').'.csv');
    }

    public function operational_excel()
    {
        return Excel::download(new OperationalReportExport(),date('Y-m-d').'.xlsx');
    }

    public function medicine_category_csv()
    {
        return Excel::download(new MedicineCategoryReportExport(),date('Y-m-d').'.csv');
    }

    public function medicine_category_excel()
    {
        return Excel::download(new MedicineCategoryReportExport(),date('Y-m-d').'.xlsx');
    }

    public function medicine_csv()
    {
        return Excel::download(new MedicineReportExport(),date('Y-m-d').'.csv');
    }

    public function medicine_excel()
    {
        return Excel::download(new MedicineReportExport(),date('Y-m-d').'.xlsx');
    }

    
}

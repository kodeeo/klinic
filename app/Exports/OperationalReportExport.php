<?php

namespace App\Exports;

use App\Models\OperationActivity;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class OperationalReportExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return OperationActivity::select('patient_id','date','title','description')->get();
    }

    public function headings(): array
    {
        return [
            "Patiend ID",
            "Date",
            "Title",
            "Description",
        ];
    }
}

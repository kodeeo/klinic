<?php

namespace App\Exports;

use App\Models\DeathReport;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class DeathReportExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DeathReport::select('patient_id','date','title','description')->get();
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

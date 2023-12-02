<?php

namespace App\Exports;

use App\Models\AssignBed;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class AssignbedExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return AssignBed::select('patient_id','ward_id','bed_id','assign_date','description')->get();
    }

    public function headings(): array
    {

        return [

            "Patient ID",
            "ward ID",
            "bed ID",
            "Assign Date",
            "Description",
           
        ];
    }
}

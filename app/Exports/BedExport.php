<?php

namespace App\Exports;
use App\Models\Bed;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class BedExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Bed::select('type','description','capacity','charge','ward_id','cabin_type','status')->get();
    }

    public function headings(): array
    {

        return [

            "Bed Type",
            "Description",
            "Capacity",
            "Charge",
            "Ward id",
            "Cabin Type",
            "Status",
        ];
    }
}

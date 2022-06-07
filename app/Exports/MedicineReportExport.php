<?php

namespace App\Exports;

use App\Models\Medicine;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class MedicineReportExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Medicine::select('name','price','manufactured_by','description')->get();
    }

    public function headings(): array
    {
        return [
            "Name",
            "Price",
            "Manufactured By",
            "Description",
        ];
    }
}

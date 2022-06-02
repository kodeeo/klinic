<?php

namespace App\Exports;

use App\Models\Nurse;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class NurseExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Nurse::select('name','contact_no','email','address','duty_hrs')->get();
    }

    public function headings(): array
    {
        return [
            "Name",
            "Contact",
            "Email",
            "Address",
            "Duty Hours",
        ];
    }
}

<?php

namespace App\Exports;

use App\Models\Doctor;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class DoctorExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Doctor::select('first_name','last_name','email','phone','address','date_of_birth','gender','degree')->get();
    }

    public function headings(): array
    {
        return [
            "First Name",
            "Last Name",
            "Email",
            "Phone",
            "Address",
            "Date Of Birth",
            "Gender",
            "Degreee",
            
        ];
    }
}

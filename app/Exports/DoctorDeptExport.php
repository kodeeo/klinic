<?php

namespace App\Exports;

use App\Models\Department;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class DoctorDeptExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Department::select('name','details')->get();
    }

    public function headings(): array
    {
        return [
            "Name",
            "Details",
        ];
    }
}

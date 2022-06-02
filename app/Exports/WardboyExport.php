<?php

namespace App\Exports;

use App\Models\Wardboy;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class WardboyExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Wardboy::select('name','email','contact','address','joinDate','hrs')->get();
    }

    public function headings(): array
    {
        return [
            "Name",
            "Email",
            "Contact",
            "Address",
            "Joining Date",
            "Duty Hours",
        ];
    }
}

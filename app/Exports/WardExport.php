<?php

namespace App\Exports;

use App\Models\Bed;
use App\Models\Ward;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class WardExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Ward::select('name','status')->get();
    }

    public function headings():array{

        return[

            "Name",
            "Status"

            
        ];
    }
}

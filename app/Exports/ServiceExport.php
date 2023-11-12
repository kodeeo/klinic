<?php

namespace App\Exports;

use App\Models\Service;
use Maatwebsite\Excel\Concerns\WithHeadings;

use Maatwebsite\Excel\Concerns\FromCollection;

class ServiceExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Service::select('name','description','rate')->get();
    }

    public function headings(): array
    {
        return [

            "Name",
            "Description",
            "Rate"
        ];
    }

}

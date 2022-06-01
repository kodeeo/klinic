<?php

namespace App\Exports;

use App\Models\Test;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class TestExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Test::select('name','price','procedure','description')->get();
    }

    public function headings(): array
    {
        return [
            "Name",
            "Price",
            "Procedure",
            "Description",
        ];
    }
}

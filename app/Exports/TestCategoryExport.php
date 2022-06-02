<?php

namespace App\Exports;

use App\Models\TestCategory;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class TestCategoryExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return TestCategory::select('name')->get();
    }

    public function headings(): array
    {
        return [
            "Name",
        ];
    }
}

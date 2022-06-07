<?php

namespace App\Exports;

use App\Models\Medicine_Category;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class MedicineCategoryReportExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Medicine_Category::select('name','description')->get();
    }

    public function headings(): array
    {
        return [
            "Name",
            "Description",
        ];
    }
}

<?php

namespace App\Exports;

use App\Models\Patient;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class PatientExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Patient::select(
            'patient_id',
            'first_name',
            'last_name',
            'email',
            'mobile',
            'date_of_birth',
            'gender',
            'blood_group',
            'status',
            'ref_by',
            'address'
        )->get();
    }

    public function headings(): array
    {
        return [
            "patient_id",
            "first_name",
            "last_name",
            "email",
            "mobile",
            "date_of_birth",
            "gender",
            "blood_group",
            "status",
            "ref_by",
            "address",
        ];
    }
}

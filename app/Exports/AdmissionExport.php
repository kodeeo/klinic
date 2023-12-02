<?php

namespace App\Exports;

use App\Models\Admission;
use Maatwebsite\Excel\Concerns\FromCollection;

class AdmissionExport implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Admission::select(
            'admission_id',
            'patient_id',
            'doctor_id',
            'admission_date',
            'package_id',
            'insurance_id',
            'height',
            'weight',
            'allergies',
            'tendancy',
            'heart_diseases',
            'high_BP',
            'accident',
            'diabetic',
            'infection',
            'quota',
            'others',
            'guardian_name',
            'guardian_relation',
            'guardian_contact',
            'guardian_address',
            'status'
        )->get();
    }
    public function headings(): array
    {
        return [
            'admission_id',
            'patient_id',
            'doctor_id',
            'admission_date',
            'package_id',
            'insurance_id',
            'height',
             'weight',
            'allergies',
            'tendancy',
            'heart_diseases',
            'high_BP',
            'accident',
            'diabetic',
            'infection',
            'quota',
            'others',
            'guardian_name',
            'guardian_relation',
            'guardian_contact',
            'guardian_address',
            'status'
        ];
    }
}

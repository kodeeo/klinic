<?php

namespace App\Exports;

use App\Models\Patient;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class PatientExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Patient::select('case_no','name','ptype','email','birthdate','gender','father','mother','nid','passport','language','spouse','b_place','address','phone','occupation','blood','status','religion','height','weight','e_name','relation','contact_number')->get();
    }

    public function headings(): array
    {
        return [
            "Case Number",
            "Name",
            "Patient Type",
            "Email",
            "Date Of Birth",
            "Gender",
            "Father's Name",
            "Mother's Name",
            "NID",
            "Passport",
            "Language",
            "Spouse Name",
            "Birth Place",
            "Address",
            "Phone",
            "Occupation",
            "Blood Group",
            "Status",
            "Religion",
            "Height",
            "Weight",
            "Emergency Contact",
            "Relation",
            "Emergency Contact Number",
        ];
    }
}

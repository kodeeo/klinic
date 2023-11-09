<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class NurseExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {

        return User::select('first_name','last_name','mobile','gender','email','address','date_of_birth')->where('role_id',3)->get();
    
    }

    public function headings(): array
    {
        return [
            
            "First Name",
            "Last Name",
            "Contact",
            "Gender",
            "Email",
            "Address",
            "Date of birth",
            
        ];
    }
}

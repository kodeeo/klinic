<?php

namespace App\Models;

use App\Models\Patient;
use App\Models\Doctor;
use App\Models\Package;
use App\Models\Insurance;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admission extends Model
{
    use HasFactory;
    protected $guarded=[];


    public function patients()
    {
        return $this->belongsTo(Patient::class,'patient_id','id');
    }

    public function doctors()
    {
        return $this->belongsTo(Doctor::class,'doctor_id','id');
    }

    public function package()
    {
        return $this->belongsTo(Package::class,'package_id','id');
    }

    public function insurances()
    {
        return $this->belongsTo(Insurance::class,'insurance_id','id');
    }


 
}

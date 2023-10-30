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


    
    public function patient()
    {
        return $this->belongsTo(Patient::class ,"patientTable_id","id");
    }
    /* for -------- */

    public function doctor()
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

//accessor
//get + attributeName+ attribute
    public function getFullNameAttributes()
    {
        return $this->firstname.' '.$this->lastname;
    }

    //mutators
    public function setFirstNameAttribute($value)
    {
        return $this->attributes['first_name']=ucfirst($value);

    }
    public function setLastNameAttribute($value)
    {
        return $this->attributes['last_name']=ucfirst($value);

    }
}

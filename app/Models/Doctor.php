<?php

namespace App\Models;

use App\Models\Admission;
use App\Models\Department;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Doctor extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function department()
    {
        return $this->belongsTo(Department::class,'department_id','id');
    }
    public function getDoctorImageAttribute($value)
    {
        if($value)
        {
            return url('/uploads/doctors/'.$value);
        }
        return url('/img/avatar.png');
    }

    public function getFullNameAttribute()
    {
        return $this->first_name. ' '. $this->last_name;
    }
}

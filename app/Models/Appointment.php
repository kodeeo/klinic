<?php

namespace App\Models;

use App\Models\Doctor;
use App\Models\Department;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Appointment extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function departmentRelation()
    {
        return $this->belongsTo(Department::class,'d_department','id');
        
    }

    public function doctorRelation()
    {
        return $this->belongsTo(Doctor::class,'doctor','id');
        
    }
}

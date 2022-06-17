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

    public function departments()
    {
        return $this->belongsTo(Department::class,'department_id','id');
        
    }

    public function doctors()
    {
        return $this->belongsTo(Doctor::class,'doctor_id','id');
        
    }
}

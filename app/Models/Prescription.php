<?php

namespace App\Models;

use App\Models\Doctor;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Prescription extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function doctors()
    {
        return $this->belongsTo(Doctor::class,'doctor_id','id');
    }

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

}

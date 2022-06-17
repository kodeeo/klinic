<?php

namespace App\Models;

use App\Models\Doctor;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BirthReport extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function doctors()
    {
        return $this->belongsTo(Doctor::class,'doctor_id','id');
    }
}

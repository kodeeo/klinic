<?php

namespace App\Models;

use App\Models\Bed;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AssignBed extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function beds()
    {
        return $this->belongsTo(Bed::class,'bed_type_id','id'); 
    }
}

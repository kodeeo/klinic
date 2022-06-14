<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bed_Assign extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function beds()
    {
        return $this->belongsTo(Bed::class,'bed_type_id','id'); 
    }
}

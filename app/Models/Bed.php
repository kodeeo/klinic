<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ward;

class Bed extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function ward()
    {
        return $this->belongsTo(Ward::class,'ward_id','id'); 
    }
}

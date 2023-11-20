<?php

namespace App\Models;

use App\Models\Bed;
use App\Models\Ward;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AssignBed extends Model
{
    use HasFactory;
    protected $guarded=[];

 public function bed()
 {
    return $this->belongsTo(Bed::class, 'bed_id', 'id');
 }

    public function ward()
    {
        return $this->belongsTo(Ward::class,'ward_id','id'); 
    } 
}

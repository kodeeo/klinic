<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ClinicSetup extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function getImageAttribute($image)
    {
        if($image){
            return Storage::url('/uploads/klinicLogo/20220618060639.png'.$image);
        }
    }
}

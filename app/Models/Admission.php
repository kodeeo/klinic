<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admission extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function cabin()
    {
        return $this->belongsTo(Cabin::class,'cabin_id','id');
        
    }

}

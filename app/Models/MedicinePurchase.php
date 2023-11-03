<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicinePurchase extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function medicine()
    {
        return $this->belongsTo(Medicine::class,'medicine_id','id');
    }
}

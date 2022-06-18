<?php

namespace App\Models;

use App\Models\MedicineCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Medicine extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function category()
    {
        return $this->belongsTo(MedicineCategory::class,'category_id','id');
    }
}

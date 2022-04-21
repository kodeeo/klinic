<?php

namespace App\Models;

use App\Models\TestCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Test extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function category()
    {
        return $this->belongsTo(TestCategory::class,'test_category_id','id');
        
    }
}

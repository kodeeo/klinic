<?php

namespace App\Models;

use App\Models\Test;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AssignTest extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function tests()
    {
        return $this->belongsTo(Test::class,'test_id','id'); 
    }
}

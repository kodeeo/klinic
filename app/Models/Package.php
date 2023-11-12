<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;
    protected $guarded=[];

    protected $casts = [
        'service_name'=> 'array',
        'service_quantity'=> 'array',
        'service_rate'=> 'array',
    ]   ;

    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id','id');
    }

    
}

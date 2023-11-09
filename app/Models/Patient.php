<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Patient extends Model
{
    use HasFactory,SoftDeletes;
    protected $guarded=[];

    public function getPatientImageAttribute($value)
    {
        if($value)
        {
            return url('/uploads/patients/'.$value);
        }
        return url('/img/avatar.png');
    }

    public function getFullNameAttribute()
    {
        return $this->first_name. ' '. $this->last_name;
    }
    public function setFirstNameAttribute($value)
    {
        $this->attributes['first_name'] = ucfirst($value);
    }
    public function setLastNameAttribute($value)
    {
        $this->attributes['last_name'] = ucfirst($value);
    }
    public function setEmailAttAttribute($value)
    {
        $this->attributes['email'] = $value;
    }

}

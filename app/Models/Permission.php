<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{ 
    protected $guarded=[];
    use HasFactory;
    public function role_permission()
    {
        return $this->hasMany(Role_Permission::class);
    }
  
}

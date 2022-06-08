<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role_Permission extends Model
{   protected $table='role_permissions';
    protected $guarded=[];
    use HasFactory;
    public function permission()
    {
        return $this->belongsTo(Permission::class);
    }

}

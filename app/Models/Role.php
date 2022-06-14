<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Role extends Model
{
    use HasFactory;
    protected $guarded =[];

    public function permissions(): BelongsToMany
    {
<<<<<<< HEAD
        return $this->belongsToMany(Permission::class,'roles_permissions');

=======
        return $this->belongsToMany(Permission::class, 'role_permissions');
>>>>>>> 31e8b37351e7e68c6fcbfb950361857c6c139df0
    }
        
    
}

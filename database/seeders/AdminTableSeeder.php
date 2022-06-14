<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use App\Models\Permission;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $role = Role::where('name', '=', 'admin')->first();
        $role->permissions()->sync(Permission::get()->pluck('id'));

        $role=Role::create([
         'name'=>'admin',
         'status'=>'active',
         'description'=>'default',
         'slug' => 'admin'
        ]);
        
      User::create([
            'role_id' => Role::where('name', '=', 'admin')->first()->id,
            'username'=>'admin',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('1234'),
        ]);
    }
}

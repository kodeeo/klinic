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
        


        // $role=Role::create([
        //  'name'=>'Admin',
        //  'status'=>'active',
        //  'description'=>'default',
        //  'slug' => 'admin'
        // ]);
        
      User::create([

            'role_id' => Role::where('name', '=', 'Admin')->first()->id,
            'username'=>'admin',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('1234'),
            // 'slug' => 'admin'
        ]);

        $role = Role::where('name', '=', 'Admin')->first();
        $role->permissions()->sync(Permission::get()->pluck('id'));
       
    }
}

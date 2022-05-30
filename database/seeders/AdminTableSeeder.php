<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role=Role::create([
         
         'name'=>'admin',
         'status'=>'active',
         'description'=>'ooo',
         'slug'=>'default',
        ]);

    
      User::create([
            'role_id'=>$role->id,
            'name'=>'Foysal',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('1234'),
        ]);
    }
}

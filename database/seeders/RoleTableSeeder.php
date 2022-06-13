<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = ['Manager','Nurse','Wardboy'];
        foreach($roles as $data)
        {
            Role::insert([
                'name'=>$data,
                'description'=>Str::random(30)
            ]);
        }
        
    }
}

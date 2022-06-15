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

        // Role::factory()->count(5)->create();
        $roles = ['Admin','Manager','Nurse','Wardboy'];
        foreach($roles as $data)
        {
            Role::insert([
                'name'=>$data,
                'description'=>Str::random(30),
                'slug' => strtolower("$data")
            ]);
        }
    }
}

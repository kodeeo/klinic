<?php

namespace Database\Seeders;
use App\Models\Nurse;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NurseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Nurse::factory()->count(5)->create();
    }
}

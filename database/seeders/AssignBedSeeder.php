<?php

namespace Database\Seeders;

use App\Models\AssignBed;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AssignBedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AssignBed::factory()->count(5)->create();
    }
}

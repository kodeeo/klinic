<?php

namespace Database\Seeders;

use App\Models\Bed;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BedTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bed::factory()->count(5)->create();
    }
}

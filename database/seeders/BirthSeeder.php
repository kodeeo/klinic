<?php

namespace Database\Seeders;
use App\Models\BirthReport;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BirthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BirthReport::factory()->count(20)->create();
    }
}

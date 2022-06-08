<?php

namespace Database\Seeders;
use App\Models\DeathReport;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DeathSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DeathReport::factory()->count(5)->create();
    }
}

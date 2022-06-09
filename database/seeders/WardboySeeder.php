<?php

namespace Database\Seeders;
use App\Models\Wardboy;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WardboySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Wardboy::factory()->count(5)->create();
    }
}

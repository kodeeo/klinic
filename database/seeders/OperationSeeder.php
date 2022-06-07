<?php

namespace Database\Seeders;
use App\Models\OperationActivity;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OperationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OperationActivity::factory()->count(5)->create();
    }
}

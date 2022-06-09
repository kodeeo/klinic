<?php

namespace Database\Seeders;

use App\Models\MedicineCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MedicineCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MedicineCategory::factory()->count(5)->create();
    }
}

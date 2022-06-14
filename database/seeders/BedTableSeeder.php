<?php

namespace Database\Seeders;

use App\Models\Bed;
use Illuminate\Support\Str;
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
        $beds = ['Covid-19','AC','Non AC','ICU','CCU','Cabin'];
        foreach($beds as $bed)
        {
            Bed::insert([
                'type' => $bed,
                'description' => Str::random(30),
                'capacity' => rand(10,50),
                'charge' => rand(300,2000)
            ]);
        }
    }
}

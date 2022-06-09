<?php

namespace Database\Seeders;

use App\Models\ClinicSetup;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KlinicSetUpSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clinic_setups')->insert([
            'name'=>'Kodeeo Klinic',
            'slogan'=>'Amader Klinic',
            'address'=>'Uttara, Dhaka-1230',
            'phone'=>'01700000000',
            'email'=>'kodeeo@gmail.com',
            'web'=>'www.kodeeo.com',
            'image'=>'klinic.png'
        ]);
        
    }
}

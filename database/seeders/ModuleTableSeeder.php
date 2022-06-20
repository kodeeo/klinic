<?php

namespace Database\Seeders;

use App\Models\Module;
use App\Models\Permission;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ModuleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $modules = [
            [
                'name' => 'Dashboard',
                'description' => 'Dashboard'
            ],
            [
                'name' => 'User',
                'description' => 'User'
            ],
            [
                'name' => 'Role',
                'description' => 'Role'
            ],
            [
                'name' => 'Permission',
                'description' => 'Permission'
            ],
            [
                'name' => 'Department',
                'description' => 'Department'
            ],
            [
                'name' => 'Designation',
                'description' => 'Designation'
            ],
            [
                'name' => 'Doctor',
                'description' => 'Doctor'
            ],
            [
                'name' => 'Schedule',
                'description' => 'Schedule'
            ],
            [
                'name' => 'Prescription',
                'description' => 'Prescription'
            ],
            [
                'name' => 'Staff',
                'description' => 'Staff'
            ],
            [
                'name' => 'Nurse',
                'description' => 'Nurse'
            ],
            [
                'name' => 'WardBoy',
                'description' => 'WardBoy'
            ],
            [
                'name' => 'Services',
                'description' => 'Services'
            ],
            [
                'name' => 'Patient',
                'description' => 'patient'
            ],
            [
                'name' => 'Appointment',
                'description' => 'Appointment'
            ],
            [
                'name' => 'Admission',
                'description' => 'Admission'
            ],
            [
                'name' => 'Test Category',
                'description' => 'Test Category'
            ],
            [
                'name' => 'Test',
                'description' => 'Test'
            ],
            [
                'name' => 'Assign Test',
                'description' => 'Assign Test'
            ],
            [
                'name' => 'Manage Bed',
                'description' => 'Manage Bed'
            ],
            [
                'name' => 'Ward',
                'description' => 'Ward'
            ],
            [
                'name' => 'Cabin',
                'description' => 'Cabin'
            ],
            [
                'name' => 'Birth Report',
                'description' => 'Birth Report'
            ],
            [
                'name' => 'Death Report',
                'description' => 'Death Report'
            ],
            [
                'name' => 'Operational Activities',
                'description' => 'Operational Activities'
            ],
            [
                'name' => 'Investigation',
                'description' => 'Investigation'
            ],
            [
                'name' => 'Medicine',
                'description' => 'Medicine'
            ],
            [
                'name' => 'Medicine Category',
                'description' => 'Medicine Category'
            ],
            [
                'name' => 'Insurance',
                'description' => 'Insurance'
            ],
            [
                'name' => 'Packages',
                'description' => 'Packages'

            ],
            [
                'name' => 'Bill',
                'description' => 'Bill'
            ],
            [
                'name' => 'Clinic SetUp',
                'description' => 'Clinic Setup'
            ],
        ];
        foreach ($modules as $module) {
            Module::create($module);
        }

    }
}

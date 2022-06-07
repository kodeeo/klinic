<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\KlinicSetUpSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(AdminTableSeeder::class);
        $this->call(KlinicSetUpSeeder::class);
        $this->call(WardboySeeder::class);
        $this->call(DoctorSeeder::class);
        $this->call(PatientSeeder::class);
        $this->call(DepartmentSeeder::class);
        $this->call(NurseSeeder::class);
        $this->call(ServiceModelSeeder::class);
        $this->call(WardSeeder::class);
        $this->call(TestSeeder::class);
        
        
        
        $this->call(TestCategorySeeder::class);
        $this->call(AppoinmentSeeder::class);
        $this->call(DesignationSeeder::class);
        $this->call(AdmissionSeeder::class);
        $this->call(VisitSeeder::class);
        $this->call(BirthSeeder::class);
        $this->call(DeathSeeder::class);
        $this->call(OperationSeeder::class);
        $this->call(InvestigationSeeder::class);
        $this->call(MedicineSeeder::class);
        $this->call(MedicineCategorySeeder::class);
    }
}

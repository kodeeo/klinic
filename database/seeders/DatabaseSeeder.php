<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use App\Models\Permission;
use Illuminate\Database\Seeder;
use Database\Seeders\TestSeeder;
use Database\Seeders\WardSeeder;
use Database\Seeders\BirthSeeder;
use Database\Seeders\DeathSeeder;
use Database\Seeders\VisitSeeder;
use Database\Seeders\DoctorSeeder;
use Database\Seeders\PatientSeeder;
use Database\Seeders\BedTableSeeder;
use Database\Seeders\MedicineSeeder;
use Database\Seeders\AssignBedSeeder;
use Database\Seeders\OperationSeeder;
use Database\Seeders\RoleTableSeeder;
use Database\Seeders\UserTableSeeder;
use Database\Seeders\AdminTableSeeder;
use Database\Seeders\AppoinmentSeeder;
use Database\Seeders\AssignTestSeeder;
use Database\Seeders\DepartmentSeeder;
use Database\Seeders\PermissionSeeder;
use Database\Seeders\KlinicSetUpSeeder;
use Database\Seeders\ModuleTableSeeder;
use Database\Seeders\PackageTableSeeder;
use Database\Seeders\ServiceTableSeeder;
use Database\Seeders\InvestigationSeeder;
use Database\Seeders\AdmissionTableSeeder;
use Database\Seeders\AppointmentTableSeeder;
use Database\Seeders\MedicineCategorySeeder;
use Database\Seeders\PrescriptionTableSeeder;
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
        $this->call(RoleTableSeeder::class);
        $this->call(AdminTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(KlinicSetUpSeeder::class);
        $this->call(ModuleTableSeeder::class);
        $this->call(PermissionSeeder::class);
        $this->call(DepartmentSeeder::class);
        $this->call(DoctorSeeder::class);
        $this->call(PatientSeeder::class);
        $this->call(ServiceTableSeeder::class);
        $this->call(WardSeeder::class);
        $this->call(TestSeeder::class);
        $this->call(AssignTestSeeder::class);
        $this->call(BedTableSeeder::class);
        $this->call(AssignBedSeeder::class);
        $this->call(AppointmentTableSeeder::class);
        $this->call(AdmissionTableSeeder::class);
        $this->call(VisitSeeder::class);
        $this->call(BirthSeeder::class);
        $this->call(DeathSeeder::class);
        $this->call(OperationSeeder::class);
        $this->call(InvestigationSeeder::class);
        $this->call(MedicineCategorySeeder::class);
        $this->call(MedicineSeeder::class);
        $this->call(PrescriptionTableSeeder::class);
        $this->call(PackageTableSeeder::class);
        $role = Role::where('name', '=', 'admin')->first();
        $role->permissions()->sync(Permission::get()->pluck('id'));
    }
    
}

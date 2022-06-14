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
                'name' => 'Staff',
                'description' => 'Staff'
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
                'name' => 'Diagnostic',
                'description' => 'Diagnostic'
            ],
            [
                'name' => 'Manage Bed',
                'description' => 'Manage Bed'
            ],
            [
                'name' => 'Room',
                'description' => 'Room'
            ],
            [
                'name' => 'Hospital Activities',
                'description' => 'Hospital Activities'
            ],
            [
                'name' => 'Clinic SetUp',
                'description' => 'Clinic Setup'
            ],
        ];
        foreach ($modules as $module) {
            Module::create($module);
        }
        // $modules = ['Dashboard', 'User', 'Role', 'Permission', 'Department', 'Designation', 'Doctor', 'Staffs', 'Nurse', 'WardBoy', 'Services', 'Patient', 'Patient Admission', 'Appointment', 'Admission', 'Test Category', 'Test List', 'Assign Test', 'Bed', 'Assign Bed', 'Ward', 'Cabin', 'Birth Report', 'Death Report', 'Operational Activities', 'Investigation', 'Medicine', 'Medicine Category'];
        // foreach ($modules as $module){
        //     Module::create([
        //         'name'=>$module
        //     ]);
        // }
        // $dashboardModule = Module::where('name', 'Dashboard')->first();
        // $permissions = ['admin.dashboard'];
        // foreach($permissions as $permission)
        // {
        //     Permission::firstOrCreate([
        //         'module_id' => $dashboardModule->id,
        //         'name' => $permission,
        //         'slug' => Str::slug($permission)
        //     ]);
        // }

        // $userModule = Module::where('name', 'User')->first();
        // $permissions= ['user.list','user.add','user.store','user.details','user.edit','user.update','user.delete'];
        // foreach($permissions as $permission)
        // {
        //     Permission::firstOrCreate([
        //         'module_id' => $userModule->id,
        //         'name' => $permission,
        //         'slug' => Str::slug($permission)
        //     ]);
        // }

        // $roleModule = Module::where('name', 'Role')->first();
        // $permissions = ['role.list','role.create','role.store','role.view','role.edit','role.update','role.delete'];
        // foreach($permissions as $permission)
        // {
        //     Permission::firstOrCreate([
        //     'module_id' => $roleModule->id,
        //     'name' => $permission,
        //     'slug' => Str::slug($permission)
        //     ]);
        // }

        // $permissionModule = Module::where('name', 'Permission')->first();
        // $permissions = ['permission.index','permission.list','permission.create','permission.store','permission.assign','permission.edit','permission.update','permission.destroy'];
        // foreach($permissions as $permission)
        // {
        //     Permission::firstOrCreate([
        //     'module_id' => $permissionModule->id,
        //     'name' => $permission,
        //     'slug' => Str::slug($permission)
        //     ]);
        // }

        // $departmentModule = Module::where('name', 'Department')->first();
        // $permissions = ['show.department','create.department','store.department','view.department','edit.department','update.department','delete.department'];
        // foreach($permissions as $permission)
        // {
        //     Permission::firstOrCreate([
        //     'module_id' => $departmentModule->id,
        //     'name' => $permission,
        //     'slug' => Str::slug($permission)
        //     ]);
        // }

        // $designationModule = Module::where('name', 'Designation')->first();
        // $permissions = ['designation.index','designation.create','designation.store','designation.show','designation.edit','designation.update','designation.destroy'];
        // foreach($permissions as $permission)
        // {
        //     Permission::firstOrCreate([
        //     'module_id' => $designationModule->id,
        //     'name' => $permission,
        //     'slug' => Str::slug($permission)
        //     ]);
        // }

        // $doctorModule = Module::where('name', 'Doctor')->first();
        // $permissions = ['doctor.index','doctor.create','doctor.store','doctor.show','doctor.edit','doctor.update','doctor.destroy'];
        // foreach($permissions as $permission)
        // {
        //     Permission::firstOrCreate([
        //     'module_id' => $doctorModule->id,
        //     'name' => $permission,
        //     'slug' => Str::slug($permission)
        //     ]);
        // }

        // $staffModule = Module::where('name', 'Staffs')->first();
        // $permissions = ['staff.index','staff.create','staff.store','staff.show','staff.edit','staff.update','staff.destroy'];
        // foreach($permissions as $permission)
        // {
        //     Permission::firstOrCreate([
        //     'module_id' => $staffModule->id,
        //     'name' => $permission,
        //     'slug' => Str::slug($permission)
        //     ]);
        // }


        // $nurseModule = Module::where('name', 'Nurse')->first();
        // $permissions = ['nurse.list','nurse.add','nurse.store','nurse.show','nurse.edit','nurse.update','nurse.delete'];
        // foreach($permissions as $permission)
        // {
        //     Permission::firstOrCreate([
        //     'module_id' => $nurseModule->id,
        //     'name' => $permission,
        //     'slug' => Str::slug($permission)
        //     ]);
        // }

        // $wardboyModule = Module::where('name', 'WardBoy')->first();
        // $permissions = ['wardboy.list','wardboy.add','wardboy.store','wardboy.show','wardboy.edit','wardboy.update','wardboy.delete'];
        // foreach($permissions as $permission)
        // {
        //     Permission::firstOrCreate([
        //     'module_id' => $wardboyModule->id,
        //     'name' => $permission,
        //     'slug' => Str::slug($permission)
        //     ]);
        // }

        // $serviceModule = Module::where('name', 'Services')->first();
        // $permissions = ['admin.service.list', 'admin.service.form','admin.service.post','admin.service.details','admin.service.edit','admin.service.update','admin.service.delete'];
        // foreach($permissions as $permission)
        // {
        //     Permission::firstOrCreate([
        //     'module_id' => $serviceModule->id,
        //     'name' => $permission,
        //     'slug' => Str::slug($permission)
        //     ]);
        // }

        // $patientModule = Module::where('name', 'Patient')->first();
        // $permissions = ['patient.list','patient.add','patient.store'];
        // foreach($permissions as $permission)
        // {
        //     Permission::firstOrCreate([
        //     'module_id' => $patientModule->id,
        //     'name' => $permission,
        //     'slug' => Str::slug($permission)
        //     ]);
        // }



        // $patientAdmissionModule = Module::where('name', 'Patient Admission')->first();
        // $permissions = ['patient_admisssion.list','patient_admisssion.add','patient_admisssion.store'];
        // foreach($permissions as $permission)
        // {
        //     Permission::firstOrCreate([
        //     'module_id' => $patientAdmissionModule->id,
        //     'name' => $permission,
        //     'slug' => Str::slug($permission)
        //     ]);
        // }

        // $patientAppointmentModule = Module::where('name', 'Appointment')->first();
        // $permissions = ['appointment.index', 'appointment.create','appointment.store','appointment.show','appointment.edit','appointment.update','appointment.destroy'];
        // foreach($permissions as $permission)
        // {
        //     Permission::firstOrCreate([
        //     'module_id' => $patientAppointmentModule->id,
        //     'name' => $permission,
        //     'slug' => Str::slug($permission)
        //     ]);
        // }

        // $testCategoryModule = Module::where('name', 'Test Category')->first();
        // $permissions = ['test.category.list','test.category.add','test.category.store','test.category.edit','test.category.update','test.category.delete'];
        // foreach($permissions as $permission)
        // {
        //     Permission::firstOrCreate([
        //     'module_id' => $testCategoryModule->id,
        //     'name' => $permission,
        //     'slug' => Str::slug($permission)
        //     ]);
        // }

        // $testListModule = Module::where('name', 'Test List')->first();
        // $permissions = ['test.list','test.add','test.store','test.edit','test.update','test.delete'];
        // foreach($permissions as $permission)
        // {
        //     Permission::firstOrCreate([
        //     'module_id' => $testListModule->id,
        //     'name' => $permission,
        //     'slug' => Str::slug($permission)
        //     ]);
        // }


        // $testAssignModule = Module::where('name', 'Assign Test')->first();
        // $permissions = ['addToCart','remove','clearCart'];
        // foreach($permissions as $permission)
        // {
        //     Permission::firstOrCreate([
        //     'module_id' => $testAssignModule->id,
        //     'name' => $permission,
        //     'slug' => Str::slug($permission)
        //     ]);
        // }

        // $bedModule = Module::where('name', 'Bed')->first();
        // $permissions = ['beds.index','beds.create','beds.store','beds.show','beds.edit','beds.update','beds.destroy'];
        // foreach($permissions as $permission)
        // {
        //     Permission::firstOrCreate([
        //     'module_id' => $bedModule->id,
        //     'name' => $permission,
        //     'slug' => Str::slug($permission)
        //     ]);
        // }

        // $assignBedModule = Module::where('name', 'Assign Bed')->first();
        // $permissions = ['assign.bed', 'assign.bed.store'];
        // foreach($permissions as $permission)
        // {
        //     Permission::firstOrCreate([
        //     'module_id' => $assignBedModule->id,
        //     'name' => $permission,
        //     'slug' => Str::slug($permission)
        //     ]);
        // }

        // $wardModule = Module::where('name', 'Ward')->first();
        // $permissions = ['ward.index', 'ward.create','ward.store','ward.show','ward.edit','ward.update','ward.destroy'];
        // foreach($permissions as $permission)
        // {
        //     Permission::firstOrCreate([
        //     'module_id' => $wardModule->id,
        //     'name' => $permission,
        //     'slug' => Str::slug($permission)
        //     ]);
        // }

        // $cabinModule = Module::where('name', 'Cabin')->first();
        // $permissions = ['cabin.index', 'cabin.create','cabin.store','cabin.show','cabin.edit','cabin.update','cabin.destroy'];
        // foreach($permissions as $permission)
        // {
        //     Permission::firstOrCreate([
        //     'module_id' => $cabinModule->id,
        //     'name' => $permission,
        //     'slug' => Str::slug($permission)
        //     ]);
        // }

        // $birthReport = Module::where('name', 'Birth Report')->first();
        // $permissions = ['birth_report.index','birth_report.create','birth_report.store','birth_report.show','birth_report.edit','birth_report.update','birth_report.destroy'];
        // foreach($permissions as $permission)
        // {
        //     Permission::firstOrCreate([
        //         'module_id' => $birthReport->id,
        //         'name' => $permission,
        //         'slug' => Str::slug($permission)
        //     ]);
        // }

        // $deathReport = Module::where('name', 'Death Report')->first();
        // $permissions = ['death_report.index','death_report.create','death_report.store','death_report.show','death_report.edit','death_report.update','death_report.destroy'];
        // foreach($permissions as $permission)
        // {
        //     Permission::firstOrCreate([
        //         'module_id' => $deathReport->id,
        //         'name' => $permission,
        //         'slug' => Str::slug($permission)
        //     ]);
        // }

        // $operationalActivitiesModule = Module::where('name', 'Operational Activities')->first();
        // $permissions = ['operational_activities.index','operational_activities.create','operational_activities.show','operational_activities.edit','operational_activities.update','operational_activities.index','operational_activities.destroy',];
        // foreach($permissions as $permission)
        // {
        //     Permission::firstOrCreate([
        //         'module_id' => $operationalActivitiesModule->id,
        //         'name' => $permission,
        //         'slug' => Str::slug($permission)
        //     ]);
        // }

        // $investigationModule = Module::where('name', 'Investigation')->first();
        // $permissions = ['investigations.index','investigations.create','investigations.store','investigations.show','investigations.edit','investigations.update','investigations.destroy'];
        // foreach($permissions as $permission)
        // {
        //     Permission::firstOrCreate([
        //         'module_id' => $investigationModule->id,
        //         'name' => $permission,
        //         'slug' => Str::slug($permission)
        //     ]);
        // }

        // $medicineModule = Module::where('name', 'Medicine')->first();
        // $permissions = ['medicine.index','medicine.create','medicine.store','medicine.show','medicine.edit','medicine.update','medicine.destroy'];
        // foreach($permissions as $permission)
        // {
        //     Permission::firstOrCreate([
        //         'module_id' => $medicineModule->id,
        //         'name' => $permission,
        //         'slug' => Str::slug($permission)
        //     ]);
        // }

        // $medicineCategoryModule = Module::where('name', 'Medicine Category')->first();
        // $permissions = ['medicine_category.index','medicine_category.create','medicine_category.store','medicine_category.show','medicine_category.edit','medicine_category.update','medicine_category.delete',];
        // foreach($permissions as $permission)
        // {
        //     Permission::firstOrCreate([
        //         'module_id' => $medicineCategoryModule->id,
        //         'name' => $permission,
        //         'slug' => Str::slug($permission)
        //     ]);
        // }

    }
}

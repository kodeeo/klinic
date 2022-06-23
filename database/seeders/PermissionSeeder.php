<?php

namespace Database\Seeders;

use App\Models\Module;
use App\Models\Permission;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $dashboardModule = Module::updateOrCreate([
           'name' => 'Dashboard',
           'description' => 'Dashboard'
       ]);
       Permission::updateOrCreate([
           'module_id' => $dashboardModule->id,
           'name' => 'Access Dashboard',
           'slug' => 'admin.dashboard'
       ]);
       $userModule = Module::updateOrCreate([
           'name' => 'User',
           'description' => 'User'
       ]);
       Permission::updateOrCreate([
           'module_id' => $userModule->id,
           'name' => 'User List',
           'slug' => 'user.list'
       ]);
       Permission::updateOrCreate([
        'module_id' => $userModule->id,
        'name' => 'User Add',
        'slug' => 'user.add'
    ]);
    Permission::updateOrCreate([
        'module_id' => $userModule->id,
        'name' => 'User Store',
        'slug' => 'user.store'
    ]);
    Permission::updateOrCreate([
        'module_id' => $userModule->id,
        'name' => 'User Details',
        'slug' => 'user.details'
    ]);
    Permission::updateOrCreate([
        'module_id' => $userModule->id,
        'name' => 'User Edit',
        'slug' => 'user.edit'
    ]);
    Permission::updateOrCreate([
        'module_id' => $userModule->id,
        'name' => 'User Update',
        'slug' => 'user.update'
    ]);
    Permission::updateOrCreate([
        'module_id' => $userModule->id,
        'name' => 'User Delete',
        'slug' => 'user.delete'
    ]);
       $roleModule = Module::updateOrCreate([
           'name' => 'Role',
           'description' => 'Role'
       ]);
       Permission::updateOrCreate([
           'module_id' => $roleModule->id,
           'name' => 'Role List',
           'slug' => 'role.list'
       ]);
       Permission::updateOrCreate([
           'module_id' => $roleModule->id,
           'name' => 'Role Create',
           'slug' => 'role.create'
       ]);
       Permission::updateOrCreate([
           'module_id' => $roleModule->id,
           'name' => 'Role Store',
           'slug' => 'role.store'
       ]);
       Permission::updateOrCreate([
        'module_id' => $roleModule->id,
        'name' => 'Role View',
        'slug' => 'role.view'
    ]);
    Permission::updateOrCreate([
        'module_id' => $roleModule->id,
        'name' => 'Role Edit',
        'slug' => 'role.edit'
    ]);
    Permission::updateOrCreate([
        'module_id' => $roleModule->id,
        'name' => 'Role Update',
        'slug' => 'role.update'
    ]);
    Permission::updateOrCreate([
        'module_id' => $roleModule->id,
        'name' => 'Role Delete',
        'slug' => 'role.delete'
    ]);
    $permissionModule = Module::updateOrCreate([
        'name' => 'Permission',
        'description' => 'Permission'
    ]);
    Permission::updateOrCreate([
        'module_id' => $permissionModule->id,
        'name' => 'Permission List',
        'slug' => 'permission.list'
    ]);
    Permission::updateOrCreate([
        'module_id' => $permissionModule->id,
        'name' => 'Permission Assign',
        'slug' => 'permission.assign'
    ]);
    Permission::updateOrCreate([
        'module_id' => $permissionModule->id,
        'name' => 'Permission Edit',
        'slug' => 'permission.edit'
    ]);
    Permission::updateOrCreate([
        'module_id' => $permissionModule->id,
        'name' => 'Permission Update',
        'slug' => 'permission.update'
    ]);
    $departmentModule = Module::updateOrcreate([
        'name' => 'Department',
        'description' => 'Department'
    ]);
    Permission::updateOrCreate([
        'module_id' => $departmentModule->id,
        'name' => 'Show Department',
        'slug' => 'show.department'
    ]);
    Permission::updateOrCreate([
        'module_id' => $departmentModule->id,
        'name' => 'Create Department',
        'slug' => 'create.department'
    ]);
    Permission::updateOrCreate([
        'module_id' => $departmentModule->id,
        'name' => 'Store Department',
        'slug' => 'store.department'
    ]);
    Permission::updateOrCreate([
        'module_id' => $departmentModule->id,
        'name' => 'View Department',
        'slug' => 'view.department'
    ]);
    Permission::updateOrCreate([
        'module_id' => $departmentModule->id,
        'name' => 'Edit Department',
        'slug' => 'edit.department'
    ]);
    Permission::updateOrCreate([
        'module_id' => $departmentModule->id,
        'name' => 'Update Department',
        'slug' => 'update.department'
    ]);
    Permission::updateOrCreate([
        'module_id' => $departmentModule->id,
        'name' => 'Delete Department',
        'slug' => 'delete.department'
    ]);
    $doctorModule = Module::updateOrCreate([
        'name' => 'Doctor',
        'description' => 'Doctor'
    ]);
    Permission::updateOrCreate([
        'module_id' => $doctorModule->id,
        'name' => 'Doctor List',
        'slug' => 'doctor.index'
    ]);
    Permission::updateOrCreate([
        'module_id' => $doctorModule->id,
        'name' => 'Doctor Create',
        'slug' => 'doctor.create'
    ]);
    Permission::updateOrCreate([
        'module_id' => $doctorModule->id,
        'name' => 'Doctor Store',
        'slug' => 'doctor.store'
    ]);
    Permission::updateOrCreate([
        'module_id' => $doctorModule->id,
        'name' => 'Doctor View',
        'slug' => 'doctor.show'
    ]);
    Permission::updateOrCreate([
        'module_id' => $doctorModule->id,
        'name' => 'Doctor Edit',
        'slug' => 'doctor.edit'
    ]);
    Permission::updateOrCreate([
        'module_id' => $doctorModule->id,
        'name' => 'Doctor Update',
        'slug' => 'doctor.update'
    ]);
    Permission::updateOrCreate([
        'module_id' => $doctorModule->id,
        'name' => 'Doctor Delete',
        'slug' => 'doctor.destroy'
    ]);
    $designationModule = Module:: updateOrCreate([
        'name' => 'Designation',
        'description' => 'Designation'
    ]);
    Permission::updateOrCreate([
        'module_id' => $designationModule->id,
        'name' => 'Designation List',
        'slug' => 'designation.index'
    ]);
    Permission::updateOrCreate([
        'module_id' => $designationModule->id,
        'name' => 'Designation Create',
        'slug' => 'designation.create'
    ]);
    Permission::updateOrCreate([
        'module_id' => $designationModule->id,
        'name' => 'Designation Show',
        'slug' => 'designation.show'
    ]);
    Permission::updateOrCreate([
        'module_id' => $designationModule->id,
        'name' => 'Designation Edit',
        'slug' => 'designation.edit'
    ]);
    Permission::updateOrCreate([
        'module_id' => $designationModule->id,
        'name' => 'Designation Update',
        'slug' => 'designation.update'
    ]);
    Permission::updateOrCreate([
        'module_id' => $designationModule->id,
        'name' => 'Designation Delete',
        'slug' => 'designation.destroy'
    ]);
    $scheduleModule = Module::updateOrCreate([
        'name' => 'Schedule',
        'description' => 'Schedule'
    ]);
    Permission::updateOrCreate([
        'module_id' => $scheduleModule->id,
        'name' => 'Schedule List',
        'slug' => 'schedule.index'
    ]);
    Permission::updateOrCreate([
        'module_id' => $scheduleModule->id,
        'name' => 'Create Schedule',
        'slug' => 'schedule.create'
    ]);
    Permission::updateOrCreate([
        'module_id' => $scheduleModule->id,
        'name' => 'Store Schedule',
        'slug' => 'schedule.store'
    ]);
    Permission::updateOrCreate([
        'module_id' => $scheduleModule->id,
        'name' => 'View Schedule',
        'slug' => 'schedule.show'
    ]);
    Permission::updateOrCreate([
        'module_id' => $scheduleModule->id,
        'name' => 'Edit Schedule',
        'slug' => 'schedule.edit'
    ]);
    Permission::updateOrCreate([
        'module_id' => $scheduleModule->id,
        'name' => 'Update Schedule',
        'slug' => 'schedule.update'
    ]);
    Permission::updateOrCreate([
        'module_id' => $scheduleModule->id,
        'name' => 'Delete Schedule',
        'slug' => 'schedule.destroy'
    ]);
    $prescriptionModule = Module::updateOrCreate([
        'name' => 'Prescription',
        'description' => 'Prescription'
    ]);
    Permission::updateOrCreate([
        'module_id' => $prescriptionModule->id,
        'name' => 'Prescription List',
        'slug' => 'prescription.index'
    ]);
    Permission::updateOrCreate([
        'module_id' => $prescriptionModule->id,
        'name' => 'Create Prescription',
        'slug' => 'prescription.create'
    ]);
    Permission::updateOrCreate([
        'module_id' => $prescriptionModule->id,
        'name' => 'Store Prescription',
        'slug' => 'prescription.store'
    ]);
    Permission::updateOrCreate([
        'module_id' => $prescriptionModule->id,
        'name' => 'View Prescription',
        'slug' => 'prescription.show'
    ]);
    Permission::updateOrCreate([
        'module_id' => $prescriptionModule->id,
        'name' => 'Edit Prescription',
        'slug' => 'prescription.edit'
    ]);
    Permission::updateOrCreate([
        'module_id' => $prescriptionModule->id,
        'name' => 'Update Prescription',
        'slug' => 'prescription.update'
    ]);
    Permission::updateOrCreate([
        'module_id' => $prescriptionModule->id,
        'name' => 'Delete Prescription',
        'slug' => 'prescription.destroy'
    ]);


    $staffModule = Module::updateOrCreate([
        'name' => 'Staff',
        'description' => 'Staff'
    ]);
    Permission::updateOrCreate([
        'module_id' => $staffModule->id,
        'name' => 'Staff Create',
        'slug' => 'staff.create'
    ]);
    Permission::updateOrCreate([
        'module_id' => $staffModule->id,
        'name' => 'Staff Store',
        'slug' => 'staff.store'
    ]);
    $nurseModule = Module::updateOrCreate([
        'name' => 'Nurse',
        'description' => 'Nurse'
    ]);
    Permission::updateOrCreate([
        'module_id'=> $nurseModule->id,
        'name' => 'Nurse List',
        'slug' => 'nurses.index'
    ]);
    Permission::updateOrCreate([
        'module_id' => $nurseModule->id,
        'name' => 'View Nurse',
        'slug' => 'nurses.show'
    ]);
    Permission::updateOrCreate([
        'module_id' => $nurseModule->id,
        'name' => 'Edit Nurse',
        'slug' => 'nurses.edit'
    ]);
    Permission::updateOrCreate([
        'module_id' => $nurseModule->id,
        'name' => 'Update Nurse',
        'slug' => 'nurses.update'
    ]);
    Permission::updateOrCreate([
        'module_id' => $nurseModule->id,
        'name' => 'Delete Nurse',
        'slug' => 'nurses.delete'
    ]);
    $wardBoyModule = Module::updateOrCreate([
        'name' => 'WardBoy',
        'description'=> 'WardBoy'
    ]);
    Permission::updateOrCreate([
        'module_id' => $wardBoyModule->id,
        'name' => 'WardBoy List',
        'slug' => 'wardboys.index'
    ]);
    Permission::updateOrCreate([
        'module_id' => $wardBoyModule->id,
        'name' => 'View WardBoy',
        'slug' => 'wardboys.show'
    ]);
    Permission::updateOrCreate([
        'module_id' => $wardBoyModule->id,
        'name' => 'Edit WardBoy',
        'slug' => 'wardboys.edit'
    ]);
    Permission::updateOrCreate([
        'module_id' => $wardBoyModule->id,
        'name' => 'Update WardBoy',
        'slug' => 'wardboys.update'
    ]);
    Permission::updateOrCreate([
        'module_id' => $wardBoyModule->id,
        'name' => 'Delete WardBoy',
        'slug' => 'wardboys.delete'
    ]);

    $serviceModule = Module::updateOrCreate([
        'name' => 'Services',
        'description' => 'Services'
    ]);
    Permission::updateOrCreate([
        'module_id' => $serviceModule->id,
        'name' => 'Service List',
        'slug' => 'admin.service.list'
    ]);
    Permission::updateOrCreate([
        'module_id' => $serviceModule->id,
        'name' => 'Create Service',
        'slug' => 'admin.service.form'
    ]);
    Permission::updateOrCreate([
        'module_id' => $serviceModule->id,
        'name' => 'Service Store',
        'slug' => 'admin.service.post'
    ]);
    Permission::updateOrCreate([
        'module_id' => $serviceModule->id,
        'name' => 'Service Store',
        'slug' => 'admin.service.post'
    ]);
    Permission::updateOrCreate([
        'module_id' => $serviceModule->id,
        'name' => 'Service Edit',
        'slug' => 'admin.service.edit'
    ]);
    Permission::updateOrCreate([
        'module_id' => $serviceModule->id,
        'name' => 'Service Update',
        'slug' => 'admin.service.update'
    ]);
    Permission::updateOrCreate([
        'module_id' => $serviceModule->id,
        'name' => 'Service Delete',
        'slug' => 'admin.service.delete'
    ]);
    $patientModule = Module::updateOrCreate([
        'name' => 'Patient',
        'description' => 'Patient'
    ]);
    Permission::updateOrCreate([
        'module_id' => $patientModule->id,
        'name' => 'Patient List',
        'slug' => 'patients.index'
    ]);
    Permission::updateOrCreate([
        'module_id' => $patientModule->id,
        'name' => 'Add Patient',
        'slug' => 'patients.create'
    ]);
    Permission::updateOrCreate([
        'module_id' => $patientModule->id,
        'name' => 'Store Patient',
        'slug' => 'patients.store'
    ]);

    $appointmentModule = Module::updateOrCreate([
        'name' => 'Appointment',
        'description' => 'Appointment'
    ]);
    Permission::updateOrcreate([
        'module_id' => $appointmentModule->id,
        'name' => 'Appointment List',
        'slug' => 'appointment.index'
    ]);
    Permission::updateOrcreate([
        'module_id' => $appointmentModule->id,
        'name' => 'Appointment List',
        'slug' => 'appointment.index'
    ]);
    Permission::updateOrcreate([
        'module_id' => $appointmentModule->id,
        'name' => 'Create Appointment',
        'slug' => 'appointment.create'
    ]);
    Permission::updateOrcreate([
        'module_id' => $appointmentModule->id,
        'name' => 'Store Appointment',
        'slug' => 'appointment.store'
    ]);
    Permission::updateOrcreate([
        'module_id' => $appointmentModule->id,
        'name' => 'View Appointment',
        'slug' => 'appointment.show'
    ]);
    Permission::updateOrcreate([
        'module_id' => $appointmentModule->id,
        'name' => 'Edit Appointment',
        'slug' => 'appointment.edit'
    ]);
    Permission::updateOrcreate([
        'module_id' => $appointmentModule->id,
        'name' => 'Update Appointment',
        'slug' => 'appointment.update'
    ]);
    Permission::updateOrcreate([
        'module_id' => $appointmentModule->id,
        'name' => 'Delete Appointment',
        'slug' => 'appointment.destroy'
    ]);
    $admissionModule = Module::updateOrCreate([
        'name' => 'Admission',
        'description' => 'Admission'
    ]);
    Permission::updateOrCreate([
        'module_id' => $admissionModule->id,
        'name' => 'Patient Admission List',
        'slug' => 'admisssions.index'
    ]);
    Permission::updateOrCreate([
        'module_id' => $admissionModule->id,
        'name' => 'Add Patient Admission',
        'slug' => 'admisssions.create'
    ]);
    Permission::updateOrCreate([
        'module_id' => $admissionModule->id,
        'name' => 'Store Patient Admission',
        'slug' => 'admisssions.store'
    ]);
    $testCategoryModule = Module::updateOrCreate([
        'name' => 'Test Category',
        'description' => 'Test Category'
    ]);
    Permission::updateOrCreate([
        'module_id' => $testCategoryModule->id,
        'name' => 'Test Category List',
        'slug' => 'test.category.list'
    ]);
    Permission::updateOrCreate([
        'module_id' => $testCategoryModule->id,
        'name' => 'Add Test Category ',
        'slug' => 'test.category.add'
    ]);
    Permission::updateOrCreate([
        'module_id' => $testCategoryModule->id,
        'name' => 'Store Test Category ',
        'slug' => 'test.category.store'
    ]);
    Permission::updateOrCreate([
        'module_id' => $testCategoryModule->id,
        'name' => 'Edit Test Category ',
        'slug' => 'test.category.edit'
    ]);
    Permission::updateOrCreate([
        'module_id' => $testCategoryModule->id,
        'name' => 'Update Test Category ',
        'slug' => 'test.category.update'
    ]);
    Permission::updateOrCreate([
        'module_id' => $testCategoryModule->id,
        'name' => 'Delete Test Category ',
        'slug' => 'test.category.delete'
    ]);
    $testModule = Module::updateOrCreate([
        'name' => 'Test',
        'description' => 'Test'
    ]);
    Permission::updateOrCreate([
        'module_id' => $testModule->id,
        'name' => 'Test List ',
        'slug' => 'tests.index'
    ]);
    Permission::updateOrCreate([
        'module_id' => $testModule->id,
        'name' => 'Add Test',
        'slug' => 'tests.create'
    ]);
    Permission::updateOrCreate([
        'module_id' => $testModule->id,
        'name' => 'Store Test',
        'slug' => 'tests.store'
    ]);
    Permission::updateOrCreate([
        'module_id' => $testModule->id,
        'name' => 'Edit Test',
        'slug' => 'tests.edit'
    ]);
    Permission::updateOrCreate([
        'module_id' => $testModule->id,
        'name' => 'Update Test',
        'slug' => 'tests.update'
    ]);
    Permission::updateOrCreate([
        'module_id' => $testModule->id,
        'name' => 'Delete Test',
        'slug' => 'tests.destroy'
    ]);
    $assignTestModule = Module::updateOrCreate([
        'name' => 'Assign Test',
        'description' => 'Assign Test'
    ]);

    Permission::updateOrCreate([
        'module_id' => $assignTestModule->id,
        'name' => 'Assign Bed',
        'slug' => 'assign.test.create'
    ]);
    Permission::updateOrCreate([
        'module_id' => $assignTestModule->id,
        'name' => 'Store Assign Test',
        'slug' => 'assign.test.store'
    ]);
    Permission::updateOrCreate([
        'module_id' => $assignTestModule->id,
        'name' => 'Store Assign Test',
        'slug' => 'assign.test.index'
    ]);


    $manageBedModule= Module::updateOrCreate([
        'name' => 'Manage Bed',
        'description' => 'Manage Bed'
    ]);
    Permission::updateOrCreate([
        'module_id' => $manageBedModule->id,
        'name' => 'Bed List',
        'slug' => 'beds.index'
    ]);
    Permission::updateOrCreate([
        'module_id' => $manageBedModule->id,
        'name' => 'Create Bed',
        'slug' => 'beds.create'
    ]);
    Permission::updateOrCreate([
        'module_id' => $manageBedModule->id,
        'name' => 'Store Bed',
        'slug' => 'beds.store'
    ]);
    Permission::updateOrCreate([
        'module_id' => $manageBedModule->id,
        'name' => 'View Bed',
        'slug' => 'beds.show'
    ]);
    Permission::updateOrCreate([
        'module_id' => $manageBedModule->id,
        'name' => 'Edit Bed',
        'slug' => 'beds.edit'
    ]);
    Permission::updateOrCreate([
        'module_id' => $manageBedModule->id,
        'name' => 'Update Bed',
        'slug' => 'beds.update'
    ]);
    Permission::updateOrCreate([
        'module_id' => $manageBedModule->id,
        'name' => 'Delete Bed',
        'slug' => 'beds.destroy'
    ]);
    Permission::updateOrCreate([
        'module_id' => $manageBedModule->id,
        'name' => 'Assign Bed',
        'slug' => 'assign.bed.create'
    ]);
    Permission::updateOrCreate([
        'module_id' => $manageBedModule->id,
        'name' => 'Store Assign Bed',
        'slug' => 'assign.bed.store'
    ]);
    Permission::updateOrCreate([
        'module_id' => $manageBedModule->id,
        'name' => 'Store Assign Bed',
        'slug' => 'assign.bed.index'
    ]);

    $wardModule = Module::updateOrCreate([
        'name' => 'Ward',
        'description' => 'Ward'
    ]);
    Permission::updateOrCreate([
        'module_id' => $wardModule->id,
        'name' => 'ward List',
        'slug' => 'ward.index'
    ]);
    Permission::updateOrCreate([
        'module_id' => $wardModule->id,
        'name' => 'Create Ward',
        'slug' => 'ward.create'
    ]);
    Permission::updateOrCreate([
        'module_id' => $wardModule->id,
        'name' => 'Store Ward',
        'slug' => 'ward.store'
    ]);
    Permission::updateOrCreate([
        'module_id' => $wardModule->id,
        'name' => 'View Ward',
        'slug' => 'ward.show'
    ]);
    Permission::updateOrCreate([
        'module_id' => $wardModule->id,
        'name' => 'Edit Ward',
        'slug' => 'ward.edit'
    ]);
    Permission::updateOrCreate([
        'module_id' => $wardModule->id,
        'name' => 'Update Ward',
        'slug' => 'ward.update'
    ]);
    Permission::updateOrCreate([
        'module_id' => $wardModule->id,
        'name' => 'Delete Ward',
        'slug' => 'ward.destroy'
    ]);
    $cabinModule = Module::updateOrCreate([
        'name' => 'Cabin',
        'description' =>'Cabin'
    ]);
    Permission::updateOrCreate([
        'module_id' => $cabinModule->id,
        'name' => 'Cabin List',
        'slug' => 'cabin.index'
    ]);
    Permission::updateOrCreate([
        'module_id' => $cabinModule->id,
        'name' => 'Store Cabin',
        'slug' => 'cabin.store'
    ]);
    Permission::updateOrCreate([
        'module_id' => $cabinModule->id,
        'name' => 'View Cabin',
        'slug' => 'cabin.show'
    ]);
    Permission::updateOrCreate([
        'module_id' => $cabinModule->id,
        'name' => 'Store Cabin',
        'slug' => 'cabin.store'
    ]);
    Permission::updateOrCreate([
        'module_id' => $cabinModule->id,
        'name' => 'View Cabin',
        'slug' => 'cabin.view'
    ]);
    Permission::updateOrCreate([
        'module_id' => $cabinModule->id,
        'name' => 'Edit Cabin',
        'slug' => 'cabin.edit'
    ]);
    Permission::updateOrCreate([
        'module_id' => $cabinModule->id,
        'name' => 'Update Cabin',
        'slug' => 'cabin.update'
    ]);
    Permission::updateOrCreate([
        'module_id' => $cabinModule->id,
        'name' => 'Delete Cabin',
        'slug' => 'cabin.destroy'
    ]);
    $birthReportModule = Module::updateOrcreate([
        'name' => 'Birth Report',
        'description' => 'Birth Report '
    ]);
    Permission::updateOrCreate([
        'module_id' => $birthReportModule->id,
        'name' => 'Birth Report List',
        'slug' => 'birth_report.index'
    ]);
    Permission::updateOrCreate([
        'module_id' => $birthReportModule->id,
        'name' => 'Create Birth Report',
        'slug' => 'birth_report.create'
    ]);
    Permission::updateOrCreate([
        'module_id' => $birthReportModule->id,
        'name' => 'Store Birth Report',
        'slug' => 'birth_report.store'
    ]);
    Permission::updateOrCreate([
        'module_id' => $birthReportModule->id,
        'name' => 'View Birth Report',
        'slug' => 'birth_report.show'
    ]);
    Permission::updateOrCreate([
        'module_id' => $birthReportModule->id,
        'name' => 'Edit Birth Report',
        'slug' => 'birth_report.edit'
    ]);
    Permission::updateOrCreate([
        'module_id' => $birthReportModule->id,
        'name' => 'Update Birth Report',
        'slug' => 'birth_report.update'
    ]);
    Permission::updateOrCreate([
        'module_id' => $birthReportModule->id,
        'name' => 'Delete Birth Report',
        'slug' => 'birth_report.delete'
    ]);
    $deathReportModule = Module::updateOrCreate([
        'name' => 'Death Report',
        'description' => 'Death Report'
    ]);
    Permission::updateOrCreate([
        'module_id' => $deathReportModule->id,
        'name' => 'Death Report List',
        'slug' => 'death_report.index'
    ]);
    Permission::updateOrCreate([
        'module_id' => $deathReportModule->id,
        'name' => 'Create Death Report',
        'slug' => 'death_report.create'
    ]);
    Permission::updateOrCreate([
        'module_id' => $deathReportModule->id,
        'name' => 'Store Death Report',
        'slug' => 'death_report.store'
    ]);
    Permission::updateOrCreate([
        'module_id' => $deathReportModule->id,
        'name' => 'Show Death Report',
        'slug' => 'death_report.show'
    ]);
    Permission::updateOrCreate([
        'module_id' => $deathReportModule->id,
        'name' => 'Edit Death Report',
        'slug' => 'death_report.edit'
    ]);
    Permission::updateOrCreate([
        'module_id' => $deathReportModule->id,
        'name' => 'Update Death Report',
        'slug' => 'death_report.update'
    ]);
    Permission::updateOrCreate([
        'module_id' => $deathReportModule->id,
        'name' => 'Delete Death Report',
        'slug' => 'death_report.destroy'
    ]);
    $operationalActivitiesModule = Module::updateOrCreate([
        'name' => 'Operational Activities',
        'description' => 'Operational Activities'
    ]);
    Permission::updateOrCreate([
        'module_id' => $operationalActivitiesModule->id,
        'name' => 'Operationl Activities List',
        'slug' => 'operational_activities.index'
    ]);
    Permission::updateOrCreate([
        'module_id' => $operationalActivitiesModule->id,
        'name' => 'Create Operationl Activities',
        'slug' => 'operational_activities.create'
    ]);
    Permission::updateOrCreate([
        'module_id' => $operationalActivitiesModule->id,
        'name' => 'Store Operationl Activities',
        'slug' => 'operational_activities.store'
    ]);
    Permission::updateOrCreate([
        'module_id' => $operationalActivitiesModule->id,
        'name' => 'View Operationl Activities',
        'slug' => 'operational_activities.show'
    ]);
    Permission::updateOrCreate([
        'module_id' => $operationalActivitiesModule->id,
        'name' => 'Edit Operationl Activities',
        'slug' => 'operational_activities.edit'
    ]);
    Permission::updateOrCreate([
        'module_id' => $operationalActivitiesModule->id,
        'name' => 'Update Operationl Activities',
        'slug' => 'operational_activities.update'
    ]);
    Permission::updateOrCreate([
        'module_id' => $operationalActivitiesModule->id,
        'name' => 'Delete Operationl Activities',
        'slug' => 'operational_activities.destroy'
    ]);
    $investigationModule = Module::updateOrCreate([
        'name' => 'Investigation',
        'description'=> 'Investigation'
    ]);
    Permission::updateOrCreate([
        'module_id' => $investigationModule->id,
        'name' => 'Investigation List',
        'slug' => 'investigations.index '
    ]);
    Permission::updateOrCreate([
        'module_id' => $investigationModule->id,
        'name' => 'Create Investigation',
        'slug' => 'investigations.index '
    ]);
    Permission::updateOrCreate([
        'module_id' => $investigationModule->id,
        'name' => 'Store Investigation',
        'slug' => 'investigations.store'
    ]);
    Permission::updateOrCreate([
        'module_id' => $investigationModule->id,
        'name' => 'View Investigation',
        'slug' => 'investigations.show'
    ]);
    Permission::updateOrCreate([
        'module_id' => $investigationModule->id,
        'name' => 'Edit Investigation',
        'slug' => 'investigations.edit'
    ]);
    Permission::updateOrCreate([
        'module_id' => $investigationModule->id,
        'name' => 'Update Investigation',
        'slug' => 'investigations.update'
    ]);
    Permission::updateOrCreate([
        'module_id' => $investigationModule->id,
        'name' => 'Delete Investigation',
        'slug' => 'investigations.delete'
    ]);
    $medicineModule = Module::updateOrCreate([
        'name' => 'Medicine',
        'description' => 'Medicine'
    ]);
    Permission::updateOrCreate([
        'module_id' => $medicineModule->id,
        'name' => 'Medicine List',
        'slug' => 'medicine.index'
    ]);
    Permission::updateOrCreate([
        'module_id' => $medicineModule->id,
        'name' => 'Create Medicine',
        'slug' => 'medicine.create'
    ]);
    Permission::updateOrCreate([
        'module_id' => $medicineModule->id,
        'name' => 'Store Medicine',
        'slug' => 'medicine.store'
    ]);
    Permission::updateOrCreate([
        'module_id' => $medicineModule->id,
        'name' => 'View Medicine',
        'slug' => 'medicine.show'
    ]);
    Permission::updateOrCreate([
        'module_id' => $medicineModule->id,
        'name' => 'Edit Medicine',
        'slug' => 'medicine.edit'
    ]);
    Permission::updateOrCreate([
        'module_id' => $medicineModule->id,
        'name' => 'Update Medicine',
        'slug' => 'medicine.update'
    ]);
    Permission::updateOrCreate([
        'module_id' => $medicineModule->id,
        'name' => 'Delete Medicine',
        'slug' => 'medicine.destroy'
    ]);
    $medicineCategoryModule = Module::updateOrCreate([
        'name' => 'Medicine Category',
        'description' => 'Medicine Category'
    ]);
    Permission::updateOrCreate([
        'module_id' => $medicineCategoryModule->id,
        'name' => 'Medicine Category List',
        'slug' => 'medicine_category.index'
    ]);
    Permission::updateOrCreate([
        'module_id' => $medicineCategoryModule->id,
        'name' => 'Create Medicine Category',
        'slug' => 'medicine_category.create'
    ]);
    Permission::updateOrCreate([
        'module_id' => $medicineCategoryModule->id,
        'name' => 'Store Medicine Category',
        'slug' => 'medicine_category.store'
    ]);
    Permission::updateOrCreate([
        'module_id' => $medicineCategoryModule->id,
        'name' => 'View Medicine Category',
        'slug' => 'medicine_category.show'
    ]);
    Permission::updateOrCreate([
        'module_id' => $medicineCategoryModule->id,
        'name' => 'Edit Medicine Category',
        'slug' => 'medicine_category.edit'
    ]);
    Permission::updateOrCreate([
        'module_id' => $medicineCategoryModule->id,
        'name' => 'Update Medicine Category',
        'slug' => 'medicine_category.update'
    ]);
    Permission::updateOrCreate([
        'module_id' => $medicineCategoryModule->id,
        'name' => 'Delete Medicine Category',
        'slug' => 'medicine_category.destroy'
    ]);
    $insuranceModule = Module::updateOrCreate([
        'name' => 'Insurance',
        'description' => 'Insurance'
    ]);
    Permission::updateOrCreate([
        'module_id' => $insuranceModule->id,
        'name' => 'Insurance List',
        'slug' => 'insurance.index'
    ]);
    Permission::updateOrCreate([
        'module_id' => $insuranceModule->id,
        'name' => 'Create Insurance',
        'slug' => 'insurance.create'
    ]);
    Permission::updateOrCreate([
        'module_id' => $insuranceModule->id,
        'name' => 'Store Insurance',
        'slug' => 'insurance.store'
    ]);
    Permission::updateOrCreate([
        'module_id' => $insuranceModule->id,
        'name' => 'View Insurance',
        'slug' => 'insurance.show'
    ]);
    Permission::updateOrCreate([
        'module_id' => $insuranceModule->id,
        'name' => 'Edit Insurance',
        'slug' => 'insurance.edit'
    ]);
    Permission::updateOrCreate([
        'module_id' => $insuranceModule->id,
        'name' => 'Update Insurance',
        'slug' => 'insurance.update'
    ]);
    Permission::updateOrCreate([
        'module_id' => $insuranceModule->id,
        'name' => 'Delete Insurance',
        'slug' => 'insurance.destroy'
    ]);
    $packageModule = Module::updateOrCreate([
        'name' => 'Packages',
        'description' => 'Packages'
    ]);
    Permission::updateOrCreate([
        'module_id' => $packageModule->id,
        'name' => 'Package List',
        'slug' => 'package.index'
    ]);
    Permission::updateOrCreate([
        'module_id' => $packageModule->id,
        'name' => 'Create Package',
        'slug' => 'package.create'
    ]);
    Permission::updateOrCreate([
        'module_id' => $packageModule->id,
        'name' => 'Store Package',
        'slug' => 'package.store'
    ]);
    Permission::updateOrCreate([
        'module_id' => $packageModule->id,
        'name' => 'View Package',
        'slug' => 'package.show'
    ]);
    Permission::updateOrCreate([
        'module_id' => $packageModule->id,
        'name' => 'Edit Package',
        'slug' => 'package.edit'
    ]);
    Permission::updateOrCreate([
        'module_id' => $packageModule->id,
        'name' => 'Update Package',
        'slug' => 'package.update'
    ]);
    Permission::updateOrCreate([
        'module_id' => $packageModule->id,
        'name' => 'Delete Package',
        'slug' => 'package.destroy'
    ]);
    $billmodule = Module::updateOrCreate([
        'name' => 'Bill',
        'description' => 'Bill'
    ]);
    Permission::updateOrCreate([
        'module_id' => $billmodule->id,
        'name' => 'Bill List',
        'slug' => 'bill.index'
    ]);
    Permission::updateOrCreate([
        'module_id' => $billmodule->id,
        'name' => 'Create Bill',
        'slug' => 'bill.create'
    ]);
    Permission::updateOrCreate([
        'module_id' => $billmodule->id,
        'name' => 'store Bill',
        'slug' => 'bill.store'
    ]);
    Permission::updateOrCreate([
        'module_id' => $billmodule->id,
        'name' => 'View Bill',
        'slug' => 'bill.show'
    ]);
    Permission::updateOrCreate([
        'module_id' => $billmodule->id,
        'name' => 'Edit Bill',
        'slug' => 'bill.edit'
    ]);
    Permission::updateOrCreate([
        'module_id' => $billmodule->id,
        'name' => 'Update Bill',
        'slug' => 'bill.update'
    ]);
    Permission::updateOrCreate([
        'module_id' => $billmodule->id,
        'name' => 'Delete Bill',
        'slug' => 'bill.destroy'
    ]);

    $clinicSetUpModule = Module::updateOrCreate([
        'name' => 'Clinic SetUp',
        'Description' => 'Clinic SetUp'
    ]);
    Permission::updateOrCreate([
        'module_id' => $clinicSetUpModule->id,
        'name' => 'Clinic Information',
        'slug' => 'clinic.index'
    ]);

    Permission::updateOrCreate([
        'module_id' => $clinicSetUpModule->id,
        'name' => 'Edit Clinic Setup',
        'slug' => 'clinic.edit'
    ]);
    Permission::updateOrCreate([
        'module_id' => $clinicSetUpModule->id,
        'name' => 'Update Clinic Setup',
        'slug' => 'clinic.update'
    ]);

    }
}

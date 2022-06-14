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
    $staffModule = Module::updateOrCreate([
        'name' => 'Staff',
        'description' => 'Staff'
    ]);
    Permission::updateOrCreate([
        'module_id' => $staffModule->id,
        'name' => 'Staff List',
        'slug' => 'staff.index'
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
    Permission::updateOrCreate([
        'module_id' => $staffModule->id,
        'name' => 'Staff Edit',
        'slug' => 'staff.edit'
    ]);
    Permission::updateOrCreate([
        'module_id' => $staffModule->id,
        'name' => 'Staff Update',
        'slug' => 'staff.update'
    ]);
    Permission::updateOrCreate([
        'module_id' => $staffModule->id,
        'name' => 'Staff Delete',
        'slug' => 'staff.destroy'
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
        'slug' => 'patient.list'
    ]);
    Permission::updateOrCreate([
        'module_id' => $patientModule->id,
        'name' => 'Add Patient',
        'slug' => 'patient.add'
    ]);
    Permission::updateOrCreate([
        'module_id' => $patientModule->id,
        'name' => 'Store Patient',
        'slug' => 'patient.store'
    ]);
    Permission::updateOrCreate([
        'module_id' => $patientModule->id,
        'name' => 'Patient List',
        'slug' => 'patient.list'
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
        'slug' => 'patient_admisssion.list'
    ]);
    Permission::updateOrCreate([
        'module_id' => $admissionModule->id,
        'name' => 'Add Patient Admission',
        'slug' => 'patient_admisssion.add'
    ]);
    Permission::updateOrCreate([
        'module_id' => $admissionModule->id,
        'name' => 'Store Patient Admission',
        'slug' => 'patient_admisssion.store'
    ]);
    $diagnosticModule = Module::updateOrCreate([
        'name' => 'Diagnostic',
        'description' => 'Diagnostic'
    ]);
    Permission::updateOrCreate([
        'module_id' => $diagnosticModule->id,
        'name' => 'Test Category List',
        'slug' => 'test.category.list'
    ]);
    Permission::updateOrCreate([
        'module_id' => $diagnosticModule->id,
        'name' => 'Add Test Category ',
        'slug' => 'test.category.add' 
    ]);
    Permission::updateOrCreate([
        'module_id' => $diagnosticModule->id,
        'name' => 'Store Test Category ',
        'slug' => 'test.category.store' 
    ]);
    Permission::updateOrCreate([
        'module_id' => $diagnosticModule->id,
        'name' => 'Edit Test Category ',
        'slug' => 'test.category.edit' 
    ]);
    Permission::updateOrCreate([
        'module_id' => $diagnosticModule->id,
        'name' => 'Update Test Category ',
        'slug' => 'test.category.update' 
    ]);
    Permission::updateOrCreate([
        'module_id' => $diagnosticModule->id,
        'name' => 'Delete Test Category ',
        'slug' => 'test.category.delete' 
    ]);
    Permission::updateOrCreate([
        'module_id' => $diagnosticModule->id,
        'name' => 'Test List ',
        'slug' => 'test.list' 
    ]);
    Permission::updateOrCreate([
        'module_id' => $diagnosticModule->id,
        'name' => 'Add Test',
        'slug' => 'test.add' 
    ]);
    Permission::updateOrCreate([
        'module_id' => $diagnosticModule->id,
        'name' => 'Add Test',
        'slug' => 'test.add' 
    ]);
    Permission::updateOrCreate([
        'module_id' => $diagnosticModule->id,
        'name' => 'Store Test',
        'slug' => 'test.store' 
    ]);
    Permission::updateOrCreate([
        'module_id' => $diagnosticModule->id,
        'name' => 'Edit Test',
        'slug' => 'test.edit' 
    ]);
    Permission::updateOrCreate([
        'module_id' => $diagnosticModule->id,
        'name' => 'Update Test',
        'slug' => 'test.update' 
    ]);
    Permission::updateOrCreate([
        'module_id' => $diagnosticModule->id,
        'name' => 'Delete Test',
        'slug' => 'test.delete' 
    ]);
    Permission::updateOrCreate([
        'module_id' => $diagnosticModule->id,
        'name' => 'Add Test To Cart',
        'slug' => 'addToCart' 
    ]);
    Permission::updateOrCreate([
        'module_id' => $diagnosticModule->id,
        'name' => 'Remove Test From Cart',
        'slug' => 'remove' 
    ]);
    Permission::updateOrCreate([
        'module_id' => $diagnosticModule->id,
        'name' => 'Clear Test From Cart',
        'slug' => 'clearCart' 
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
        'slug' => 'assign.bed'
    ]);
    Permission::updateOrCreate([
        'module_id' => $manageBedModule->id,
        'name' => 'Store Assign Bed',
        'slug' => 'assign.bed.store'
    ]);
    $roomModule = Module::updateOrCreate([
        'name' => 'Room',
        'description' => 'Room'
    ]);
    Permission::updateOrCreate([
        'module_id' => $roomModule->id,
        'name' => 'ward List',
        'slug' => 'ward.index'
    ]);
    Permission::updateOrCreate([
        'module_id' => $roomModule->id,
        'name' => 'Create Ward',
        'slug' => 'ward.create'
    ]);
    Permission::updateOrCreate([
        'module_id' => $roomModule->id,
        'name' => 'Store Ward',
        'slug' => 'ward.store'
    ]);
    Permission::updateOrCreate([
        'module_id' => $roomModule->id,
        'name' => 'View Ward',
        'slug' => 'ward.show'
    ]);
    Permission::updateOrCreate([
        'module_id' => $roomModule->id,
        'name' => 'Edit Ward',
        'slug' => 'ward.edit'
    ]);
    Permission::updateOrCreate([
        'module_id' => $roomModule->id,
        'name' => 'Update Ward',
        'slug' => 'ward.update'
    ]);
    Permission::updateOrCreate([
        'module_id' => $roomModule->id,
        'name' => 'Delete Ward',
        'slug' => 'ward.destroy'
    ]);
    Permission::updateOrCreate([
        'module_id' => $roomModule->id,
        'name' => 'Cabin List',
        'slug' => 'cabin.index'
    ]);
    Permission::updateOrCreate([
        'module_id' => $roomModule->id,
        'name' => 'Store Cabin',
        'slug' => 'cabin.store'
    ]);
    Permission::updateOrCreate([
        'module_id' => $roomModule->id,
        'name' => 'View Cabin',
        'slug' => 'cabin.show'
    ]);
    Permission::updateOrCreate([
        'module_id' => $roomModule->id,
        'name' => 'Store Cabin',
        'slug' => 'cabin.store'
    ]);
    Permission::updateOrCreate([
        'module_id' => $roomModule->id,
        'name' => 'View Cabin',
        'slug' => 'cabin.view'
    ]);
    Permission::updateOrCreate([
        'module_id' => $roomModule->id,
        'name' => 'Edit Cabin',
        'slug' => 'cabin.edit'
    ]);
    Permission::updateOrCreate([
        'module_id' => $roomModule->id,
        'name' => 'Update Cabin',
        'slug' => 'cabin.update'
    ]);
    Permission::updateOrCreate([
        'module_id' => $roomModule->id,
        'name' => 'Delete Cabin',
        'slug' => 'cabin.destroy'
    ]);
    $hospitalActivitiesModule = Module::updateOrcreate([
        'name' => 'Hospital Activities',
        'description' => 'Hospital Activities'
    ]);
    Permission::updateOrCreate([
        'module_id' => $hospitalActivitiesModule->id,
        'name' => 'Birth Report List',
        'slug' => 'birth_report.index'
    ]);
    Permission::updateOrCreate([
        'module_id' => $hospitalActivitiesModule->id,
        'name' => 'Create Birth Report',
        'slug' => 'birth_report.create'
    ]);
    Permission::updateOrCreate([
        'module_id' => $hospitalActivitiesModule->id,
        'name' => 'Store Birth Report',
        'slug' => 'birth_report.store'
    ]);
    Permission::updateOrCreate([
        'module_id' => $hospitalActivitiesModule->id,
        'name' => 'View Birth Report',
        'slug' => 'birth_report.show'
    ]);
    Permission::updateOrCreate([
        'module_id' => $hospitalActivitiesModule->id,
        'name' => 'Edit Birth Report',
        'slug' => 'birth_report.edit'
    ]);
    Permission::updateOrCreate([
        'module_id' => $hospitalActivitiesModule->id,
        'name' => 'Update Birth Report',
        'slug' => 'birth_report.update'
    ]);
    Permission::updateOrCreate([
        'module_id' => $hospitalActivitiesModule->id,
        'name' => 'Delete Birth Report',
        'slug' => 'birth_report.delete'
    ]);
    Permission::updateOrCreate([
        'module_id' => $hospitalActivitiesModule->id,
        'name' => 'Death Report List',
        'slug' => 'death_report.index'
    ]);
    Permission::updateOrCreate([
        'module_id' => $hospitalActivitiesModule->id,
        'name' => 'Create Death Report',
        'slug' => 'death_report.create'
    ]);
    Permission::updateOrCreate([
        'module_id' => $hospitalActivitiesModule->id,
        'name' => 'Store Death Report',
        'slug' => 'death_report.store'
    ]);
    Permission::updateOrCreate([
        'module_id' => $hospitalActivitiesModule->id,
        'name' => 'Show Death Report',
        'slug' => 'death_report.show'
    ]);
    Permission::updateOrCreate([
        'module_id' => $hospitalActivitiesModule->id,
        'name' => 'Edit Death Report',
        'slug' => 'death_report.edit'
    ]);
    Permission::updateOrCreate([
        'module_id' => $hospitalActivitiesModule->id,
        'name' => 'Update Death Report',
        'slug' => 'death_report.update'
    ]);
    Permission::updateOrCreate([
        'module_id' => $hospitalActivitiesModule->id,
        'name' => 'Delete Death Report',
        'slug' => 'death_report.destroy'
    ]);
    Permission::updateOrCreate([
        'module_id' => $hospitalActivitiesModule->id,
        'name' => 'Operationl Activities List',
        'slug' => 'operational_activities.index'
    ]);
    Permission::updateOrCreate([
        'module_id' => $hospitalActivitiesModule->id,
        'name' => 'Create Operationl Activities',
        'slug' => 'operational_activities.create'
    ]);
    Permission::updateOrCreate([
        'module_id' => $hospitalActivitiesModule->id,
        'name' => 'Store Operationl Activities',
        'slug' => 'operational_activities.store'
    ]);
    Permission::updateOrCreate([
        'module_id' => $hospitalActivitiesModule->id,
        'name' => 'View Operationl Activities',
        'slug' => 'operational_activities.show'
    ]);
    Permission::updateOrCreate([
        'module_id' => $hospitalActivitiesModule->id,
        'name' => 'Edit Operationl Activities',
        'slug' => 'operational_activities.edit'
    ]);
    Permission::updateOrCreate([
        'module_id' => $hospitalActivitiesModule->id,
        'name' => 'Update Operationl Activities',
        'slug' => 'operational_activities.update'
    ]);
    Permission::updateOrCreate([
        'module_id' => $hospitalActivitiesModule->id,
        'name' => 'Delete Operationl Activities',
        'slug' => 'operational_activities.destroy'
    ]);
    Permission::updateOrCreate([
        'module_id' => $hospitalActivitiesModule->id,
        'name' => 'Investigation List',
        'slug' => 'investigations.index '
    ]);
    Permission::updateOrCreate([
        'module_id' => $hospitalActivitiesModule->id,
        'name' => 'Create Investigation',
        'slug' => 'investigations.index '
    ]);
    Permission::updateOrCreate([
        'module_id' => $hospitalActivitiesModule->id,
        'name' => 'Store Investigation',
        'slug' => 'investigations.store'
    ]);
    Permission::updateOrCreate([
        'module_id' => $hospitalActivitiesModule->id,
        'name' => 'View Investigation',
        'slug' => 'investigations.show'
    ]);
    Permission::updateOrCreate([
        'module_id' => $hospitalActivitiesModule->id,
        'name' => 'Edit Investigation',
        'slug' => 'investigations.edit'
    ]);
    Permission::updateOrCreate([
        'module_id' => $hospitalActivitiesModule->id,
        'name' => 'Update Investigation',
        'slug' => 'investigations.update'
    ]);
    Permission::updateOrCreate([
        'module_id' => $hospitalActivitiesModule->id,
        'name' => 'Delete Investigation',
        'slug' => 'investigations.delete'
    ]);
    Permission::updateOrCreate([
        'module_id' => $hospitalActivitiesModule->id,
        'name' => 'Medicine List',
        'slug' => 'medicine.index'
    ]);
    Permission::updateOrCreate([
        'module_id' => $hospitalActivitiesModule->id,
        'name' => 'Create Medicine',
        'slug' => 'medicine.create'
    ]);
    Permission::updateOrCreate([
        'module_id' => $hospitalActivitiesModule->id,
        'name' => 'Store Medicine',
        'slug' => 'medicine.store'
    ]);
    Permission::updateOrCreate([
        'module_id' => $hospitalActivitiesModule->id,
        'name' => 'View Medicine',
        'slug' => 'medicine.show'
    ]);
    Permission::updateOrCreate([
        'module_id' => $hospitalActivitiesModule->id,
        'name' => 'Edit Medicine',
        'slug' => 'medicine.edit'
    ]);
    Permission::updateOrCreate([
        'module_id' => $hospitalActivitiesModule->id,
        'name' => 'Update Medicine',
        'slug' => 'medicine.update'
    ]);
    Permission::updateOrCreate([
        'module_id' => $hospitalActivitiesModule->id,
        'name' => 'Delete Medicine',
        'slug' => 'medicine.destroy'
    ]);
    Permission::updateOrCreate([
        'module_id' => $hospitalActivitiesModule->id,
        'name' => 'Medicine Category List',
        'slug' => 'medicine_category.index'
    ]);
    Permission::updateOrCreate([
        'module_id' => $hospitalActivitiesModule->id,
        'name' => 'Create Medicine Category',
        'slug' => 'medicine_category.create'
    ]);
    Permission::updateOrCreate([
        'module_id' => $hospitalActivitiesModule->id,
        'name' => 'Store Medicine Category',
        'slug' => 'medicine_category.store'
    ]);
    Permission::updateOrCreate([
        'module_id' => $hospitalActivitiesModule->id,
        'name' => 'View Medicine Category',
        'slug' => 'medicine_category.show'
    ]);
    Permission::updateOrCreate([
        'module_id' => $hospitalActivitiesModule->id,
        'name' => 'Edit Medicine Category',
        'slug' => 'medicine_category.edit'
    ]);
    Permission::updateOrCreate([
        'module_id' => $hospitalActivitiesModule->id,
        'name' => 'Update Medicine Category',
        'slug' => 'medicine_category.update'
    ]);
    Permission::updateOrCreate([
        'module_id' => $hospitalActivitiesModule->id,
        'name' => 'Delete Medicine Category',
        'slug' => 'medicine_category.destroy'
    ]);
    $clinicSetUpModule = Module::updateOrCreate([
        'name' => 'Clinic SetUp',
        'Description' => 'Clinic SetUp'
    ]);
    Permission::updateOrCreate([
        'module_id' => $clinicSetUpModule->id,
        'name' => 'Clinic Information',
        'slug' => 'clinic.informations'
    ]);
    Permission::updateOrCreate([
        'module_id' => $clinicSetUpModule->id,
        'name' => 'Clinic Setup',
        'slug' => 'clinic.setup'
    ]);
    Permission::updateOrCreate([
        'module_id' => $clinicSetUpModule->id,
        'name' => 'Store Clinic Setup',
        'slug' => 'clinic.setup.store'
    ]);
    Permission::updateOrCreate([
        'module_id' => $clinicSetUpModule->id,
        'name' => 'Edit Clinic Setup',
        'slug' => 'clinic.setup.edit'
    ]);
    Permission::updateOrCreate([
        'module_id' => $clinicSetUpModule->id,
        'name' => 'Update Clinic Setup',
        'slug' => 'clinic.setup.update'
    ]);
    Permission::updateOrCreate([
        'module_id' => $clinicSetUpModule->id,
        'name' => 'Delete Clinic Setup',
        'slug' => 'clinic.setup.delete'
    ]);
    
    }
}
 
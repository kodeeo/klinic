<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BedController;
use App\Http\Controllers\Admin\CartController;
use App\Http\Controllers\Admin\RoleController;

use App\Http\Controllers\Admin\TestController;

use App\Http\Controllers\Admin\UserController;



// use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\WardController;
use App\Http\Controllers\Admin\CabinController;
use App\Http\Controllers\Admin\LoginController;

use App\Http\Controllers\Admin\NurseController;

use App\Http\Controllers\Admin\StaffController;
use App\Http\Controllers\Admin\ClinicController;
use App\Http\Controllers\Admin\DoctorController;


use App\Http\Controllers\Admin\PatientController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\WardboyController;
use App\Http\Controllers\Admin\LanguageController;
use App\Http\Controllers\Admin\PasswordController;

// use App\Http\Controllers\Admin\DesignationController;

use App\Http\Controllers\Admin\ScheduleController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\AppointmentController;
use App\Http\Controllers\Admin\DesignationController;

use App\Http\Controllers\Admin\TestCategoryController;
use App\Http\Controllers\Admin\Export\TestExportController;
use App\Http\Controllers\Admin\Export\NurseExportController;
use App\Http\Controllers\Admin\Activities\MedicineController;
use App\Http\Controllers\Admin\Export\DoctorExportController;
use App\Http\Controllers\Admin\Export\PatientExportController;
use App\Http\Controllers\Admin\Export\WardBoyExportController;
use App\Http\Controllers\Admin\Activities\BirthreportController;
use App\Http\Controllers\Admin\Activities\DeathreportController;
use App\Http\Controllers\Admin\Export\DoctorDeptExportController;
use App\Http\Controllers\Admin\Activities\InvestigationController;
use App\Http\Controllers\Admin\Export\TestCategoryExportController;
use App\Http\Controllers\Admin\Activities\MedicinecategoryController;
use App\Http\Controllers\Admin\Activities\OperationalReportController;
use App\Http\Controllers\Admin\Export\HospitalActivitiesExportController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|



*/


Route::get('/login',[LoginController::class,'login'])->name('master.login');

    // Forget &Reset passowrd
Route::get('/forget-passowrd', [PasswordController::class, 'forgetPassword'])->name('forget.password');
Route::post('/forget-password', [PasswordController::class, 'forgetPasswordEmailPost'])->name('forget.password.post');
Route::get('/reset-password/{token}', [PasswordController::class, 'resetPassword'])->name('reset.password');
Route::post('/reset_password', [PasswordController::class, 'resetPasswordPost'])->name('reset.password.post');

Route::get('/',[LoginController::class,'login'])->name('master.login');

Route::post('/dologin',[LoginController::class,'dologin'])->name('master.dologin');

Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){

Route::get('/logout',[LoginController::class,'logout'])->name('admin.logout');
    
Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('admin.dashboard');

    //role
Route::get('/role/list',[RoleController::class, 'list'])->name('role.list');
Route::get('/role/create',[RoleController::class, 'create'])->name('role.create');
Route::post('/role/store',[RoleController::class, 'store'])->name('role.store');
Route::get('/role/view/{role_id}',[RoleController::class, 'detail'])->name('role.view');
Route::get('/roles/edit/{role_id}',[RoleController::class, 'edit'])->name('role.edit');
Route::post('/roles/update/{role_id}',[RoleController::class, 'update'])->name('role.update');
Route::get('/role/delete/{role_id}', [RoleController::class, 'delete'])->name('role.delete');

// role permission

    
    //users
Route::get('/user/list',[UserController::class, 'u_list'])->name('user.list');
Route::get('/user/add',[UserController::class, 'u_add'])->name('user.add');
Route::post('/user/store',[UserController::class, 'u_store'])->name('user.store');
Route::get('/user/view/{user_id}', [UserController::class,'u_view'])->name('user.details');
Route::get('/user/edit/{user_id}',[UserController::class,'u_edit'])->name('user.edit');



//users
Route::get('/user/list',[UserController::class, 'u_list'])->name('user.list');
Route::get('/user/add',[UserController::class, 'u_add'])->name('user.add');
Route::post('/user/store',[UserController::class, 'u_store'])->name('user.store');
Route::get('/user/view/{user_id}', [UserController::class,'u_view'])->name('user.details');
Route::get('/user/edit/{user_id}',[UserController::class,'u_edit'])->name('user.edit');


//Patient

Route::get('/patients/list/',[PatientController::class, 'patientlist'])->name('patient.list');
Route::get('/patients/add',[PatientController::class, 'patientAdd'])->name('patient.add');
Route::post('/patients/store',[PatientController::class, 'patientStore'])->name('patient.store');

    //Patient_Admission
Route::get('/patients/admission/add',[PatientController::class, 'patientAdmissionAdd'])->name('patient_admisssion.add');
Route::get('/patients/admission/add/{patient_id}',[PatientController::class, 'patientAdmissionAdd'])->name('patient_admisssion.add');
Route::post('/patients/admission/store',[PatientController::class, 'patientAdmissionStore'])->name('patient_admisssion.store');
Route::get('/patients/admission/lists',[PatientController::class, 'patientAdmissionList'])->name('patient_admisssion.list');
//Appointment
Route::resource('/appointment',AppointmentController::class);




//doctor_department

    //doctor_department

Route::controller(DepartmentController::class)->group(function () {
    Route::get('/show/department','show')->name('show.department'); 
    Route::get('/create/department','create')->name('create.department'); 
    Route::post('/store/department','store')->name('store.department'); 
    Route::get('/view/department/{id}','view')->name('view.department'); 
    Route::get('/edit/department/{id}','edit')->name('edit.department');
    Route::put('/update/department/{id}','update')->name('update.department');
    Route::get('/deletevoluteer/{id}','delete')->name('delete.department');
});

// Diagonistic

    // test category
Route::get('/test/category/list',[TestCategoryController::class, 'categoryList'])->name('test.category.list');
Route::get('/test/category/add',[TestCategoryController::class, 'categoryAdd'])->name('test.category.add');
Route::post('/test/category/store',[TestCategoryController::class, 'categoryStore'])->name('test.category.store');
Route::get('/test/category/edit/{category_id}',[TestCategoryController::class,'categoryEdit'])->name('test.category.edit');
Route::put('/test/category/update/{category_id}',[TestCategoryController::class, 'categoryUpdate'])->name('test.category.update');
Route::get('/test/category/delete/{category_id}',[TestCategoryController::class,'categoryDelete'])->name('test.category.delete');

    //test
Route::get('/test/list',[TestController::class, 'testList'])->name('test.list');
Route::get('/test/add',[TestController::class, 'testAdd'])->name('test.add');
Route::post('/test/store',[TestController::class, 'testStore'])->name('test.store');
Route::get('/test/edit/{test_id}',[TestController::class,'testEdit'])->name('test.edit');
Route::put('/test/update/{test_id}',[TestController::class, 'testUpdate'])->name('test.update');
Route::get('/test/delete/{test_id}',[TestController::class,'testDelete'])->name('test.delete');

    //assign test recource controller
Route::resource('cart',CartController::class);

Route::get('add/cart/{test}', [CartController::class, 'addToCart'])->name('addToCart');
Route::get('remove/cart/{id}', [CartController::class, 'removeFromCart'])->name('remove');
Route::get('clear/clear', [CartController::class, 'clearCart'])->name('clearCart');
Route::get('key/clear', [CartController::class, 'keyClear'])->name('key.clear');

    //Doctor resource controller
Route::resource('doctor',DoctorController::class);

    //Staff resource controller
Route::resource('staffs',StaffController::class);

    //Nurse
Route::resource('nurses',NurseController::class);

    //WardBoy
Route::resource('wardboys', WardboyController::class);

    //Designation resource controller
Route::resource('designation',DesignationController::class);


    //Schedule resource controller
Route::resource('schedule',ScheduleController::class);


    //Permission resource controller
Route::resource('permission',PermissionController::class);
Route::get('permission/list/{role_id}',[PermissionController::class,'permissionList'])->name('permission.list');
Route::post('/permission/assign/{role_id}', [PermissionController::class, 'assign'])->name('permission.assign');
Route::get('/permission/edit/{role_id}', [PermissionController::class, 'permissionEdit'])->name('permission.edit');
Route::put('/permission/update/{role_id}', [PermissionController::class, 'permissionUpdate'])->name('permission.update');


    //Clinic Setup
Route::get('/clinic/informations',[ClinicController::class,'info'])->name('clinic.informations');
Route::get('/clinic/setup',[ClinicController::class,'setup'])->name('clinic.setup');
Route::post('/clinic/setup/store',[ClinicController::class,'store'])->name('clinic.setup.store');
Route::get('/clinic/setup/edit/{id}',[ClinicController::class,'edit'])->name('clinic.setup.edit');
Route::put('/clinic/setup/update/{id}',[ClinicController::class,'update'])->name('clinic.setup.update');
Route::get('clinic/setup/delete/{id}',[ClinicController::class,'delete'])->name('clinic.setup.delete');
  
  //Cabin resource controller
Route::resource('cabin',CabinController::class);


    //Bed Manager
Route::get('beds/assign/create', [BedController::class, 'assign_bed_create'])->name('assign.bed.create');
Route::get('beds/assign/index', [BedController::class, 'assigned_bed_index'])->name('assign.bed.index');
Route::post('beds/assign/store', [BedController::class, 'assign_bed_store'])->name('assign.bed.store');
Route::resource('beds', BedController::class);


    #services
Route::get('/services',[ServiceController::class,'serviceForm'])->name('admin.service.form');
Route::post('/services',[ServiceController::class,'postService'])->name('admin.service.post');
Route::get('/service/list',[ServiceController::class,'serviceList'])->name('admin.service.list');

    #services CRUD
Route::get('/service/details/{id}',[ServiceController::class,'serviceDetails'])->name('admin.service.details');
Route::get('/service/edit/{id}',[ServiceController::class,'serviceEdit'])->name('admin.service.edit');
Route::put('/service/edit/{id}',[ServiceController::class,'serviceUpdate'])->name('admin.service.update');
Route::get('/service/delete/{id}',[ServiceController::class,'serviceDelete'])->name('admin.service.delete');

    #status update
Route::put('services/list/{id}',[ServiceController::class,'statusUpdate'])->name('admin.service.status.update');




//localization
    //localization

Route::get('/language/{local}',[LanguageController::class,'changeLanguage'])->name('admin.language.change');

    # ward CRUD
Route::resource('ward', WardController::class);


//Hospital Activities
Route::resource('birth_report', BirthreportController::class);
Route::resource('death_report', DeathreportController::class);
Route::resource('operational_activities', OperationalReportController::class);
Route::resource('investigations', InvestigationController::class);
Route::resource('medicine', MedicineController::class);
Route::resource('medicine_category', MedicinecategoryController::class);
}); 

                                                #All Exports



    //Test Export
Route::controller(TestExportController::class)->group(function () {
    Route::get('test/data/csv','csv')->name('test.data.csv');
    Route::get('test/data/excel','excel')->name('test.data.excel');
});

    //Text Category Export
Route::controller(TestCategoryExportController::class)->group(function () {
    Route::get('test/categories/data/csv','csv')->name('test.categories.data.csv');
    Route::get('test/categories/data/excel','excel')->name('test.categories.data.excel');
});

    //Nurse Export
Route::controller(NurseExportController::class)->group(function () {
    Route::get('nurse/data/csv','csv')->name('nurse.data.csv');
    Route::get('nurse/data/excel','excel')->name('nurse.data.excel');
});

    //Wardboy Export
Route::controller(WardBoyExportController::class)->group(function () {
    Route::get('wardboy/data/csv','csv')->name('wardboy.data.csv');
    Route::get('wardboy/data/excel','excel')->name('wardboy.data.excel');
});

    //Doctor Export
Route::controller(DoctorExportController::class)->group(function () {
    Route::get('doctor/data/csv','csv')->name('doctor.data.csv');
    Route::get('doctor/data/excel','excel')->name('doctor.data.excel');
});

    //Doctor Department Export
Route::controller(DoctorDeptExportController::class)->group(function () {
    Route::get('department/data/csv','csv')->name('department.data.csv');
    Route::get('department/data/excel','excel')->name('department.data.excel');
});

    //Patient Export
Route::controller(PatientExportController::class)->group(function () {
    Route::get('patient/data/csv','csv')->name('patient.data.csv');
    Route::get('patient/data/excel','excel')->name('patient.data.excel');
    Route::get('patient/data/pdf','pdf')->name('patient.data.pdf');
    Route::get('patient/data/print','print')->name('patient.data.print');
});


//Hospital Activities Export
Route::controller(HospitalActivitiesExportController::class)->group(function () {
    Route::get('birth/report/csv','birth_csv')->name('birth.report.csv');
    Route::get('birth/report/excel','birth_excel')->name('birth.report.excel');

    Route::get('death/report/csv','death_csv')->name('death.report.csv');
    Route::get('death/report/excel','death_excel')->name('death.report.excel');


    Route::get('operational/report/csv','operational_csv')->name('operational.report.csv');
    Route::get('operational/report/excel','operational_excel')->name('operational.report.excel');

    Route::get('medicine_category/report/csv','medicine_category_csv')->name('medicine_category.report.csv');
    Route::get('medicine_category/report/excel','medicine_category_excel')->name('medicine_category.report.excel');

    Route::get('medicine/report/csv','medicine_csv')->name('medicine.report.csv');
    Route::get('medicine/report/excel','medicine_excel')->name('medicine.report.excel');

});

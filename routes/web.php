<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CartController;
use App\Http\Controllers\Admin\RoleController;

use App\Http\Controllers\Admin\TestController;

use App\Http\Controllers\Admin\UserController;


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

use App\Http\Controllers\Admin\ScheduleController;

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\DesignationController;
use App\Http\Controllers\Admin\TestCategoryController;
use App\Http\Controllers\Admin\Export\TestExportController;
use App\Http\Controllers\Admin\Export\NurseExportController;
use App\Http\Controllers\Admin\Export\DoctorExportController;
use App\Http\Controllers\Admin\Export\PatientExportController;
use App\Http\Controllers\Admin\Export\WardBoyExportController;
use App\Http\Controllers\Admin\Export\DoctorDeptExportController;
use App\Http\Controllers\Admin\Export\TestCategoryExportController;

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

    // role
Route::get('/role/list',[RoleController::class, 'list'])->name('role.list');
Route::get('/role/create',[RoleController::class, 'create'])->name('role.create');
Route::post('/role/store',[RoleController::class, 'store'])->name('role.store');
Route::get('/role/view/{role_id}',[RoleController::class, 'detail'])->name('role.view');
Route::get('/roles/edit/{role_id}',[RoleController::class, 'edit'])->name('role.edit');
Route::post('/roles/update/{role_id}',[RoleController::class, 'update'])->name('role.update');
Route::get('/role/delete/{role_id}', [RoleController::class, 'delete'])->name('role.delete');
    
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

    //Nurse
Route::get('/nurse/list',[NurseController::class, 'nurseList'])->name('nurse.list');
Route::get('/nurse/add',[NurseController::class, 'nurseAdd'])->name('nurse.add');
Route::post('/nurse/store',[NurseController::class, 'nurseStore'])->name('nurse.store');
Route::get('/nurse/edit/{nurse_id}',[NurseController::class,'nurseEdit'])->name('nurse.edit');
Route::put('/nurse/update/{nurse_id}',[NurseController::class, 'nurseUpdate'])->name('nurse.update');
Route::get('/nurse/show/{nurse_id}',[NurseController::class,'nurseShow'])->name('nurse.show');
Route::get('/nurse/delete/{nurse_id}',[NurseController::class,'nurseDelete'])->name('nurse.delete');

    //WardBoy
Route::get('/wardboy/list',[WardboyController::class,'wardboyList'])->name('wardboy.list');
Route::get('/wardboy/add',[WardboyController::class,'wardboyAdd'])->name('wardboy.add');
Route::post('/wardboy/store',[WardboyController::class,'wardboyStore'])->name('wardboy.store');
Route::get('/wardboy/edit/{wardboy_id}',[WardboyController::class,'wardboyEdit'])->name('wardboy.edit');
Route::put('/wardboy/update/{wardboy_id}',[WardboyController::class,'wardboyUpdate'])->name('wardboy.update');
Route::get('/wardboy/delete/{wardboy_id}',[WardboyController::class,'wardboyDelete'])->name('wardboy.delete');
Route::get('/wardboy/show/{wardboy_id}',[WardboyController::class,'wardboyShow'])->name('wardboy.show');


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
Route::resource('staff',StaffController::class);

    //Designation resource controller
Route::resource('designation',DesignationController::class);


//Schedule resource controller
Route::resource('schedule',ScheduleController::class);


//Permission resource controller
Route::resource('permission',PermissionController::class);


    //Clinic Setup
Route::get('/clinic/informations',[ClinicController::class,'info'])->name('clinic.informations');
Route::get('/clinic/setup',[ClinicController::class,'setup'])->name('clinic.setup');
Route::post('/clinic/setup/store',[ClinicController::class,'store'])->name('clinic.setup.store');
Route::get('/clinic/setup/edit/{id}',[ClinicController::class,'edit'])->name('clinic.setup.edit');
Route::put('/clinic/setup/update/{id}',[ClinicController::class,'update'])->name('clinic.setup.update');
Route::get('clinic/setup/delete/{id}',[ClinicController::class,'delete'])->name('clinic.setup.delete');
  
  //Cabin resource controller
Route::resource('cabin',CabinController::class);

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
Route::get('/language/{local}',[LanguageController::class,'changeLanguage'])->name('admin.language.change');

    # ward CRUD
Route::resource('ward', WardController::class);

                                                #All Exports

    //Test Export
Route::controller(TestExportController::class)->group(function () {
    Route::get('test/data/csv','csv')->name('test.data.csv');
    Route::get('test/data/excel','excel')->name('test.data.excel');
    Route::get('test/data/pdf','pdf')->name('test.data.pdf');
    Route::get('test/data/print','print')->name('test.data.print');
});
    
    //Text Category Export
Route::controller(TestCategoryExportController::class)->group(function () {
    Route::get('test/categories/data/csv','csv')->name('test.categories.data.csv');
    Route::get('test/categories/data/excel','excel')->name('test.categories.data.excel');
    Route::get('test/categories/data/pdf','pdf')->name('test.categories.data.pdf');
    Route::get('test/categories/data/print','print')->name('test.categories.data.print');
});

    //Nurse Export
Route::controller(NurseExportController::class)->group(function () {
    Route::get('nurse/data/csv','csv')->name('nurse.data.csv');
    Route::get('nurse/data/excel','excel')->name('nurse.data.excel');
    Route::get('nurse/data/pdf','pdf')->name('nurse.data.pdf');
    Route::get('nurse/data/print','print')->name('nurse.data.print');
});

    //Wardboy Export
Route::controller(WardBoyExportController::class)->group(function () {
    Route::get('wardboy/data/csv','csv')->name('wardboy.data.csv');
    Route::get('wardboy/data/excel','excel')->name('wardboy.data.excel');
    Route::get('wardboy/data/pdf','pdf')->name('wardboy.data.pdf');
    Route::get('wardboy/data/print','print')->name('wardboy.data.print');
});

    //Doctor Export
Route::controller(DoctorExportController::class)->group(function () {
    Route::get('doctor/data/csv','csv')->name('doctor.data.csv');
    Route::get('doctor/data/excel','excel')->name('doctor.data.excel');
    Route::get('doctor/data/pdf','pdf')->name('doctor.data.pdf');
    Route::get('doctor/data/print','print')->name('doctor.data.print');
});

    //Doctor Department Export
Route::controller(DoctorDeptExportController::class)->group(function () {
    Route::get('department/data/csv','csv')->name('department.data.csv');
    Route::get('department/data/excel','excel')->name('department.data.excel');
    Route::get('department/data/pdf','pdf')->name('department.data.pdf');
    Route::get('department/data/print','print')->name('department.data.print');
});

    //Patient Export
Route::controller(PatientExportController::class)->group(function () {
    Route::get('patient/data/csv','csv')->name('patient.data.csv');
    Route::get('patient/data/excel','excel')->name('patient.data.excel');
    Route::get('patient/data/pdf','pdf')->name('patient.data.pdf');
    Route::get('patient/data/print','print')->name('patient.data.print');
});

}); 
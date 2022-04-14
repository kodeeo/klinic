<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\TestController;

use App\Http\Controllers\Admin\UserController;

use App\Http\Controllers\Admin\LoginController;

use App\Http\Controllers\Admin\StaffController;
use App\Http\Controllers\Admin\DoctorController;
use App\Http\Controllers\Admin\PatientController;


use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\TestCategoryController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
// */ 
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


      




// Route::get('admin/dashboard',[DashboardController::class,'dashboard'])->name('admin.dashboard');


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

Route::get('/patients/list',[PatientController::class, 'patientlist'])->name('patient.list');
Route::get('/patients/add',[PatientController::class, 'patientAdd'])->name('patient.add');
Route::post('/patients/store',[PatientController::class, 'patientStore'])->name('patient.store');

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



//Doctor resource controller
Route::resource('doctor',DoctorController::class);

// Staff resource controller
Route::resource('staff',StaffController::class);

//Designation resource controller
Route::resource('designation',DesignationController::class);



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

}); 






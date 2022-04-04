<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\LoginController;

use App\Http\Controllers\Admin\DoctorController;

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PermissionController;


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
Route::group(['prefix'=>'admin'],function(){
Route::get('/login',[LoginController::class,'login'])->name('master.login');
Route::post('/dologin',[LoginController::class,'dologin'])->name('master.dologin');
Route::group(['middleware'=>['auth','admin']],function(){

    Route::get('/', function () {
        return redirect()->route('admin.dashboard');
    });
    
    Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('admin.dashboard');
    
    Route::resource('/doctor',DoctorController::class);
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
});       
});


<?php

use App\Models\Test;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\Admin\BedController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\TestController;



// use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\UserController;
// use App\Http\Controllers\Admin\CabinController;
use App\Http\Controllers\Admin\WardController;

use App\Http\Controllers\Admin\LoginController;

use App\Http\Controllers\Admin\NurseController;
use App\Http\Controllers\Admin\StaffController;


use App\Http\Controllers\Admin\ClinicController;
use App\Http\Controllers\Admin\DoctorController;
use App\Http\Controllers\Admin\PackageController;
use App\Http\Controllers\Admin\PatientController;
use App\Http\Controllers\Admin\ProfileController;

// use App\Http\Controllers\Admin\DesignationController;

use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\WardboyController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Admin\LanguageController;
use App\Http\Controllers\Admin\PasswordController;
use App\Http\Controllers\Admin\ScheduleController;

use App\Http\Controllers\Admin\AdmissionController;
use App\Http\Controllers\Admin\Bill\BillController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\InsuranceController;
use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\MedicinePurchaseController;
use App\Http\Controllers\Admin\AppointmentController;
use App\Http\Controllers\Admin\DesignationController;
use App\Http\Controllers\Admin\PrescriptionController;
use App\Http\Controllers\Admin\Export\TestExportController;
use App\Http\Controllers\Admin\Export\NurseExportController;
use App\Http\Controllers\Admin\Activities\MedicineController;

use App\Http\Controllers\Admin\Export\DoctorExportController;
use App\Http\Controllers\Admin\Export\PatientExportController;
use App\Http\Controllers\Admin\Export\AdmissionExportController;


use App\Http\Controllers\Admin\Export\BedExportController;


use App\Http\Controllers\Admin\Export\ServiceExportController;

use App\Http\Controllers\Admin\Export\WardBoyExportController;
use App\Http\Controllers\Admin\Export\ScheduleExportController;
use App\Http\Controllers\Admin\Activities\BirthreportController;
use App\Http\Controllers\Admin\Activities\DeathreportController;

use App\Http\Controllers\Admin\Export\DoctorDeptExportController;
use App\Http\Controllers\Admin\Activities\InvestigationController;
use App\Http\Controllers\Admin\Export\TestCategoryExportController;

use App\Http\Controllers\MedicinePurchaseController;
use App\Http\Controllers\Admin\Activities\OperationalReportController;
use App\Http\Controllers\Admin\AdvancePaymentController;
use App\Http\Controllers\Admin\Export\AdvancePaymentExportController;
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

Route::get('/', [HomeController::class, 'home'])->name('home');



// Forget &Reset passowrd
Route::get('/forget-passowrd', [PasswordController::class, 'forgetPassword'])->name('forget.password');
Route::post('/forget-password', [PasswordController::class, 'forgetPasswordEmailPost'])->name('forget.password.post');
Route::get('/reset-password/{token}', [PasswordController::class, 'resetPassword'])->name('reset.password');
Route::post('/reset_password', [PasswordController::class, 'resetPasswordPost'])->name('reset.password.post');


Route::group(['prefix' => 'admin'], function () {

    Route::get('/', [LoginController::class, 'login'])->name('master.login');
    Route::post('/login', [LoginController::class, 'dologin'])->name('master.dologin');

    Route::group(['middleware' => 'auth'], function () {

        Route::get('/logout', [LoginController::class, 'logout'])->name('admin.logout');

        Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');

        //role
        Route::get('/role/list', [RoleController::class, 'list'])->name('role.list');
        Route::get('/role/create', [RoleController::class, 'create'])->name('role.create');
        Route::post('/role/store', [RoleController::class, 'store'])->name('role.store');
        Route::get('/role/view/{role_id}', [RoleController::class, 'detail'])->name('role.view');
        Route::get('/roles/edit/{role_id}', [RoleController::class, 'edit'])->name('role.edit');
        Route::post('/roles/update/{role_id}', [RoleController::class, 'update'])->name('role.update');
        Route::get('/role/delete/{role_id}', [RoleController::class, 'delete'])->name('role.delete');

        // role permission


        //users
        Route::get('/user/list', [UserController::class, 'u_list'])->name('user.list');
        Route::get('/user/add', [UserController::class, 'u_add'])->name('user.add');
        Route::post('/user/store', [UserController::class, 'u_store'])->name('user.store');
        Route::get('/user/view/{user_id}', [UserController::class, 'u_view'])->name('user.details');
        Route::get('/user/edit/{user_id}', [UserController::class, 'u_edit'])->name('user.edit');


        //Patient

        Route::resource('patients', PatientController::class);



        //Patient_Admission
        Route::resource('admissions', AdmissionController::class);

        //Appointment
        Route::resource('appointment', AppointmentController::class);

        //doctor_department

        //doctor_department

        Route::controller(DepartmentController::class)->group(function () {
            Route::get('/show/department', 'show')->name('show.department');
            Route::get('/create/department', 'create')->name('create.department');
            Route::post('/store/department', 'store')->name('store.department');
            Route::get('/view/department/{id}', 'view')->name('view.department');
            Route::get('/edit/department/{id}', 'edit')->name('edit.department');
            Route::put('/update/department/{id}', 'update')->name('update.department');
            Route::get('/delete/department/{id}', 'destroy')->name('destroy.department');
            Route::put('status/department/{id}', 'statusUpdate')->name('department.status.update');
        });
    });

    // Diagonistic

    //test
    Route::resource('tests', TestController::class);

    //assign test
    Route::controller(TestController::class)->group(function () {
        Route::get('/assign/tests/list', 'assignTestIndex')->name('assign.test.index');
        Route::get('/assign/tests/form', 'assignTestCreate')->name('assign.test.create');
        Route::post('/assign/tests/store', 'assignTestStore')->name('assign.test.store');
    });

    //Doctor resource controller
    Route::resource('doctor', DoctorController::class);

    Route::get('/doctor/pdf/print{id}', [DoctorController::class, 'doctorPdf'])->name('pdf.doctor');

    Route::put('status/doctor/{id}', [DoctorController::class, 'statusUpdate'])->name('doctor.status.update');


    //Prescription
    Route::resource('prescription', PrescriptionController::class);

    //Staff resource controller
    Route::resource('staffs', StaffController::class);

    //Nurse
    Route::resource('nurses', NurseController::class);
    Route::put('/nurse/statusupdate/{id}', [NurseController::class, 'statusUpdate'])->name('nurse.status.update');

    //WardBoy
    Route::resource('wardboys', WardboyController::class);
    Route::put('/wardboy/statusupdate/{id}', [WardboyController::class, 'statusUpdate'])->name('wardboy.status.update');

    //Designation resource controller
    Route::resource('designation', DesignationController::class);


    //Schedule resource controller
    Route::resource('schedule', ScheduleController::class);
    Route::put('status_update/{id}', [ScheduleController::class,'statusUpdate'])->name('schedule.status.update');
    Route::controller(ScheduleExportController::class)->group(function () {
        Route::get('/schedule_csv', 'csv')->name('schedule.csv.export');
        Route::get('/schedule_excel', 'excel')->name('schedule.excel.export');
    });



    //Permission resource controller
    Route::resource('permission', PermissionController::class);
    Route::get('permission/list/{role_id}', [PermissionController::class, 'permissionList'])->name('permission.list');
    Route::post('/permission/assign/{role_id}', [PermissionController::class, 'assign'])->name('permission.assign');
    Route::get('/permission/edit/{role_id}', [PermissionController::class, 'permissionEdit'])->name('permission.edit');
    Route::put('/permission/update/{role_id}', [PermissionController::class, 'permissionUpdate'])->name('permission.update');


    //Clinic Setup
    Route::resource('clinic', ClinicController::class);

    //Cabin resource controller
    // Route::resource('cabin',CabinController::class);


    //Bed Manager
    // Route::get('select/ward', [BedController::class, 'select_ward'])->name('assign.bed.create');
    Route::get('select/ward', [BedController::class, 'select_ward'])->name('assign.bed.create');
    Route::get('assign/bed/{ward_id}', [BedController::class, 'assign_bed'])->name('assign.bed');
    Route::get('beds/assign/index', [BedController::class, 'assigned_bed_index'])->name('assign.bed.index');
    Route::post('beds/assign/store/{bed_id}', [BedController::class, 'assign_bed_store'])->name('assign.bed.store');
    Route::get('assign/bed/edit/{id}', [BedController::class, 'assign_bed_edit'])->name('assign.bed.edit');
    Route::put('assign/bed/update/{id}', [BedController::class, 'assign_bed_update'])->name('assign.bed.update');
    Route::get('assign/bed/show/{id}', [BedController::class, 'assign_bed_show'])->name('assign.bed.show');
    Route::get('assign/bed/delete/{id}', [BedController::class, 'assign_bed_delete'])->name('assign.bed.delete');
    Route::resource('beds', BedController::class);


    //services
    Route::resource('services', ServiceController::class);
    Route::put('services/list/{id}', [ServiceController::class, 'statusUpdate'])->name('service.status.update');


    //packages
    Route::resource('packages', PackageController::class);
    Route::put('packages/list/{id}', [PackageController::class, 'statusUpdate'])->name('package.status.update');
    // Route::get('package/show/{id}',[PackageController::class,'view'])->name('package.show');

    //localization

    Route::get('/language/{local}', [LanguageController::class, 'changeLanguage'])->name('admin.language.change');

    # ward CRUD
    Route::resource('ward', WardController::class);


//Hospital Activities
Route::resource('birth_report', BirthreportController::class);
Route::resource('death_report', DeathreportController::class);
Route::resource('operational_activities', OperationalReportController::class);
Route::resource('investigations', InvestigationController::class);
Route::resource('medicine', MedicineController::class);
Route::resource('medicine_purchase', MedicinePurchaseController::class);


    //Bill resouce
    Route::resource('bill', BillController::class);
    Route::get('/bill-invoice/{id}', [BillController::class, 'bill'])->name('bill.invoice');


    //Advance Paymnet
    Route::resource('advancepayment', AdvancePaymentController::class);

//Insurance
Route::resource('insurance', InsuranceController::class);

});





#All Exports



//Test Export
Route::controller(TestExportController::class)->group(function () {
    Route::get('test/data/csv', 'csv')->name('test.data.csv');
    Route::get('test/data/excel', 'excel')->name('test.data.excel');
});

//Text Category Export
Route::controller(TestCategoryExportController::class)->group(function () {
    Route::get('test/categories/data/csv', 'csv')->name('test.categories.data.csv');
    Route::get('test/categories/data/excel', 'excel')->name('test.categories.data.excel');
});

//Nurse Export
Route::controller(NurseExportController::class)->group(function () {
    Route::get('nurse/data/csv', 'csv')->name('nurse.data.csv');
    Route::get('nurse/data/excel', 'excel')->name('nurse.data.excel');
});

//Wardboy Export
Route::controller(WardBoyExportController::class)->group(function () {
    Route::get('wardboy/data/csv', 'csv')->name('wardboy.data.csv');
    Route::get('wardboy/data/excel', 'excel')->name('wardboy.data.excel');
});

//service Export
Route::controller(ServiceExportController::class)->group(function () {
    Route::get('service/data/csv', 'csv')->name('service.data.csv');
    Route::get('service/data/excel', 'excel')->name('service.data.excel');
});

//Doctor Export
Route::controller(DoctorExportController::class)->group(function () {
    Route::get('doctor/data/csv', 'csv')->name('doctor.data.csv');
    Route::get('doctor/data/excel', 'excel')->name('doctor.data.excel');
});

//Doctor Department Export
Route::controller(DoctorDeptExportController::class)->group(function () {
    Route::get('department/data/csv', 'csv')->name('department.data.csv');
    Route::get('department/data/excel', 'excel')->name('department.data.excel');
    Route::get('department/data/pdf', 'pdf')->name('department.data.pdf');
});

//Patient Export
Route::controller(PatientExportController::class)->group(function () {
    Route::get('patient/data/csv', 'csv')->name('patient.data.csv');
    Route::get('patient/data/excel', 'excel')->name('patient.data.excel');
    Route::get('patient/data/pdf', 'pdf')->name('patient.data.pdf');
    Route::get('patient/data/print', 'print')->name('patient.data.print');
});

//Admission Export
Route::controller(AdmissionExportController::class)->group(function(){
    Route::get('admission/data/csv','csv')->name('admission.data.csv');
    Route::get('admission/data/excel','excel')->name('admission.data.excel');
    Route::get('admission/data/pdf','pdf')->name('admission.data.pdf');
    Route::get('admission/data/print','print')->name('admission.data.print');
});




//bed export

Route::controller(BedExportController::class)->group(function (){
    Route::get('bed/data/excel','excel')->name('bed.excel');
    Route::get('bed/data/csv','csv')->name('bed.csv');
});


//Hospital Activities Export
Route::controller(HospitalActivitiesExportController::class)->group(function () {
    Route::get('birth/report/csv', 'birth_csv')->name('birth.report.csv');
    Route::get('birth/report/excel', 'birth_excel')->name('birth.report.excel');

    Route::get('death/report/csv', 'death_csv')->name('death.report.csv');
    Route::get('death/report/excel', 'death_excel')->name('death.report.excel');



    Route::get('medicine/report/csv','medicine_csv')->name('medicine.report.csv');
    Route::get('medicine/report/excel','medicine_excel')->name('medicine.report.excel');

    Route::get('medicine/report/csv', 'medicine_csv')->name('medicine.report.csv');
    Route::get('medicine/report/excel', 'medicine_excel')->name('medicine.report.excel');
});

//AdvancePaymentExportControlller
Route::controller(AdvancePaymentExportController::class)->group(function(){
    Route::get('advancepayment/data/csv','csv')->name('advancepayment.data.csv');
    Route::get('advancepayment/data/excel','excel')->name('advancepayment.data.excel');
    Route::get('advancepayment/data/pdf','pdf')->name('advancepayment.data.pdf');
    Route::get('advancepayment/data/print','print')->name('advancepayment.data.print');
});



//Profile
Route::controller(ProfileController::class)->group(function () {
    Route::get('profile/details/{id}', 'profile')->name('profile');
    Route::get('profile/edit/{id}', 'edit')->name('profile.edit');
    Route::put('profile/update/{id}', 'update')->name('profile.update');
    Route::get('password/edit/{id}', 'passwordEdit')->name('password.edit');
    Route::put('password/update/{id}', 'passwordUpdate')->name('password.update');
});


Route::resource('data', DemoController::class); #update
Route::resource('data', DemoController::class); #show
Route::resource('data', DemoController::class); #create
Route::resource('data', DemoController::class);#index

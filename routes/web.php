<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Teacher\TeacherDashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Teacher\TeacherController;
use App\Http\Controllers\admin\adminController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\ComplaintController;
use App\Http\Controllers\ParentController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\StaffController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;

// Route::get("/", function (){
//     return view("login");
// });
Route::group(['prefix' => 'account'], function () {

    // Middleware for guest users.
    Route::group(['middleware' => 'guest'], function () {

        Route::get('login', [LoginController::class, 'index'])->name('account.login');
        Route::post('authenticate', [LoginController::class, 'authenticate'])->name('account.authenticate');
        Route::get('register', [RegisterController::class, 'index'])->name('account.register');
        Route::post('process-register', [RegisterController::class, 'processRegister'])->name('account.processRegister');
    });

    // Middleware for authenticated users.
    Route::group(['middleware' => 'auth'], function () {
        Route::get('dashboard', [DashboardController::class, 'index'])->name('account.dashboard');

        Route::get('logout', [LoginController::class, 'logout'])->name('account.logout');

        #added by prakash
    });
    Route::resource('students', StudentController::class)->names('students');
    Route::resource('staffs', StaffController::class)->names('staffs');
    Route::resource('parents', ParentController::class)->names('parents');
    Route::resource('classes', ClassController::class)->names('classes');
    Route::resource('complaints', ComplaintController::class)->names('complaints');
    Route::resource('subjects', SubjectController::class)->names('subjects');
});



// route for admin

Route::get('/admin/login', [adminController::class, 'index'])->name('admin.login');
Route::post('/admin/authenticate', [adminController::class, 'authenticate'])->name('admin.authenticate');
Route::get('admin/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
Route::get('admin/logout', [adminController::class, 'logout'])->name('admin.logout');


Route::get('/teacher/login', [TeacherController::class, 'index'])->name('teacher.login');
Route::post('/teacher/authenticate', [TeacherController::class, 'authenticate'])->name('teacher.authenticate');
Route::get('teacher/dashboard', [TeacherDashboardController::class, 'index'])->name('teacher.dashboard');
Route::get('teacher/logout', [TeacherController::class, 'logout'])->name('teacher.logout');
Route::get('/', function (Request $request) {

    // dd($request->path());
    // if (Auth::check()) {
    //     // return redirect()->route('teacher.dashboard');
    // }
    // dd($request->all());
    return view('index');
})->name('index');

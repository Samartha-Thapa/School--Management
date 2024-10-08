<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\DashBoardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentDashboardController;
use App\Http\Controllers\TeacherController;
use App\Http\Middleware\AuthAdmin;
use App\Http\Middleware\AuthAdminOrStudent;
use App\Http\Middleware\AuthStudent;
use Illuminate\Support\Facades\Route;

// Register 

Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('/register', [RegisteredUserController::class, 'store']);


// Admin routes
Route::get('/admin/login', [LoginController::class, 'showAdminLoginForm'])->name('admin.login');
Route::post('/admin/login', [LoginController::class, 'adminLogin']);
Route::post('/admin/logout', [LogoutController::class, 'adminLogout'])->name('admin.logout');

// Student routes
Route::get('/student/login', [LoginController::class, 'showStudentLoginForm'])->name('student.login');
Route::post('/student/login', [LoginController::class, 'studentLogin']);
Route::post('/student/logout', [LogoutController::class, 'studentLogout'])->name('student.logout');

// Protected routes for Admin & Student
Route::middleware([AuthAdminOrStudent::class])->group(function () {

    // For Students 

    Route::controller(StudentController::class)->group(function (){
        Route::get('/students', 'show');
        Route::get('/students/create', 'create');
        Route::post('/students', 'store');
    });

    // For Teachers
    Route::controller(TeacherController::class)->group(function (){
    Route::get('/teachers', 'show');
    Route::get('/teachers/create', 'create');
    Route::post('/teachers', 'store');
    });

    // For Classes

    Route::controller(ClassController::class)->group(function (){
    Route::get('/classes', 'index');
    Route::get('/classes/{class}/{section}', 'show')->name('class.show');
    });

    // Test Dashboard
    Route::get('/', [DashBoardController::class, 'index']);
    
});


// Protected routes for Admin
Route::group(['middleware' => [AuthAdmin::class]], function () {
    Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');    

    // // For Teachers

    // Route::controller(TeacherController::class)->group(function (){
    //     Route::get('/teachers/create', 'create');
    //     Route::post('/teachers', 'store');
    // });

    // // For Students 

    // Route::controller(StudentController::class)->group(function (){
    //     Route::get('/students/create', 'create');
    //     Route::post('/students', 'store');
    
    // });
});

// Protected routes for Students

Route::middleware([AuthStudent::class])->group(function () {
    Route::get('/students/dashboard', [StudentDashboardController::class, 'index'])->name('student.dashboard');
});

// Logout Routes
Route::post('/admin/logout', [AdminDashboardController::class, 'logout'])->name('admin.logout');
Route::post('/student/logout', [StudentDashboardController::class, 'logout'])->name('student.logout');

// General login route
Route::get('/login', function () {
   return view('auth.login');
})->name('login');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\Market\CategoryController;
use App\Http\Controllers\headcontroller;
use App\Http\Controllers\HeadController as ControllersHeadController;
use App\Http\Controllers\Register\AdminLoginController;
use \App\Http\Controllers\Register\LoginController;
use \App\Http\Controllers\Register\RegisterController;
use App\Http\Controllers\UserDashboard\DashboardController;
use App\Http\Controllers\UserDashboard\UserListController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/



Route::prefix('admin')->namespace('Admin')->middleware('Admin')->group(function () {

    Route::get('/', [AdminDashboardController::class, 'index'])->name('admin.index');
    Route::prefix('users')->namespace('users')->group(function () {


        // category////////////////////////


        Route::prefix('category')->group(function () {

            Route::get('/', [CategoryController::class, 'index'])->name('admin.market.category.index');
            Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('admin.market.category.edit');
            Route::get('/create', [CategoryController::class, 'create'])->name('admin.market.category.create');
            Route::post('/store', [CategoryController::class, 'store'])->name('admin.market.category.store');
            Route::put('/update/{id}', [CategoryController::class, 'update'])->name('admin.market.category.update');
            Route::delete('/destroy/{id}', [CategoryController::class, 'destroy'])->name('admin.market.category.destroy');
        });
    });
});


//user_dashboard
Route::prefix('dashboard')->namespace('dashboard')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('user.dashboard.index');
    Route::get('/logout', [HeadController::class, 'logout'])->name('logout');
    Route::get('User_list', [UserListController::class, 'index'])->name('admin.dashboard.userlist');
});
// RegisterLogin

Route::get('/', [LoginController::class, 'index'])->name('register.login.index');
Route::post('/store', [LoginController::class, 'store'])->name('register.store');


// Admin-login
Route::get('/admin', [AdminLoginController::class, 'index'])->name('admin.login.index');
Route::post('/login-admin', [AdminLoginController::class, 'login'])->name('admin.login');

// Register
Route::get('/register-form', [RegisterController::class, 'index'])->name('register.register-form.index');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

// otpcode
Route::get('/otp-form', [OtpCodeController::class, 'index'])->name('otpcode.index');
Route::get('/otp', [OtpCodeController::class, 'store'])->name('otpcode.store');


/// logour

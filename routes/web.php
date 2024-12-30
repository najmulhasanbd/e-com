<?php

use App\Http\Controllers\Backend\AdminController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\User\UserController;
use App\Http\Middleware\AuthAdmin;

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home.index');

//user controller
Route::middleware(['auth'])->group(function () {
    Route::get('account-dashboard', [UserController::class, 'index'])->name('user.index');
});


//admin controller
Route::middleware(['auth', AuthAdmin::class])->group(function () {
    Route::get('admin-dashboard', [AdminController::class, 'index'])->name('admin.index');
});

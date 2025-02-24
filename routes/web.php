<?php

use App\Http\Controllers\SessionController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\InputController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DesignController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('landing');
})->name('landing');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
Route::post('/admin/upload/{id}', [AdminController::class, 'uploadImage'])->name('admin.upload');

Route::get('/login', [SessionController::class, 'index'])->name('login');
Route::post('/login', [SessionController::class, 'login'])->name('session.login.post');
Route::delete('/logout', [SessionController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('dashboard.admin');
    Route::get('/admin/update-status/{id}', [AdminController::class, 'updateStatus'])->name('admin.updateStatus');
    Route::get('/dashboard', [UserController::class, 'index'])->name('dashboard.user');

    Route::resource('design', DesignController::class);

    Route::get('/input', [DesignController::class, 'create'])->name('input');
    Route::post('/input', [DesignController::class, 'store'])->name('input');
});




<?php

use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Admin\UserController as AdminUserController;

Route::resource('/register', RegisterController::class)
    ->only(['create', 'store']);

Route::middleware(['auth'])->group(function () {
    
    Route::get('/admin/users', [AdminUserController::class, 'index'])
        ->name('admin.users.index');

        Route::get('/admin/users', function () {
        abort_if(!auth()->user()->hasRole('admin'), 403);
    });
});

// User Profile (self)
Route::middleware(['auth'])->group(function () {
    
    Route::get('/profile/edit', [AdminUserController::class, 'edit'])
        ->name('profile.edit');

    Route::put('/profile', [AdminUserController::class, 'update'])
        ->name('profile.update');
     
});

// Admin User Management
Route::middleware(['auth'])->group(function () {
    
    Route::get('/admin/users/{user}/edit', [AdminUserController::class, 'edit'])
        ->name('admin.users.edit');

    Route::put('/admin/users/{user}', [AdminUserController::class, 'update'])
        ->name('admin.users.update');
     
});


Route::middleware(['auth'])->group(function () {

    Route::delete('/admin/users/{user}', 
        [AdminUserController::class, 'destroy'])
        ->name('admin.users.destroy');
});

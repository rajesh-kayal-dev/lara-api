<?php

use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Admin\UserController as AdminUserController;

Route::resource('/register', RegisterController::class)
    ->only(['create', 'store']);

Route::middleware(['auth'])->group(function () {
    
    // Route::get('/admin/users', [AdminUserController::class, 'index'])
    //     ->name('admin.users.index');

        Route::get('/admin/users', function () {
        abort_if(!auth()->user()->hasRole('admin'), 403);
    });
});

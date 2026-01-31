<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;

Route::resource('register', RegisterController::class)
    ->only(['create', 'store']);

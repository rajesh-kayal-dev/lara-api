
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;





Route::post('/user', [UserController::class, 'store']);
Route::get('/users/get/{flag}', [UserController::class, 'index']);
Route::get('/users/{id}', [UserController::class, 'show']);
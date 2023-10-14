<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// CONTROLLERS
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::group(['middleware' => ['auth:sanctum']], function () {

    // ROLE
    Route::get('/role', [RoleController::class, 'index']);
    Route::get('/role/datatable', [RoleController::class, 'datatable']);
    Route::post('/role', [RoleController::class, 'store']);
    Route::get('/role/{id}', [RoleController::class, 'show']);
    Route::put('/role/{id}', [RoleController::class, 'update']);
    Route::delete('/role/destroy/{id}', [RoleController::class, 'destroy']);
    Route::put('/role/restore/{id}', [RoleController::class, 'restore']);

    // USER
    Route::get('/user', [UserController::class, 'index']);
    Route::get('/user/datatable', [UserController::class, 'datatable']);
    Route::post('/user', [UserController::class, 'store']);
    Route::get('/user/{id}', [UserController::class, 'show']);
    Route::put('/user/{id}', [UserController::class, 'update']);
    Route::delete('/user/destroy/{id}', [UserController::class, 'destroy']);
    Route::put('/user/restore/{id}', [UserController::class, 'restore']);

// });

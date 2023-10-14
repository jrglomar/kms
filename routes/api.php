<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// CONTROLLERS
use App\Http\Controllers\RoleController;

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
    Route::get('/role/{id}', [RoleController::class, 'show']);
    Route::put('/role/{id}', [RoleController::class, 'update']);
    Route::delete('/role/destroy/{id}', [RoleController::class, 'destroy']);
    Route::put('/role/restore/{id}', [RoleController::class, 'restore']);


// });

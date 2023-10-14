<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(
    [
        'prefix' => '/admin',
    ],
    function () {

        // ------------DASHBOARD--------------- //
        Route::get('/dashboard', function () {
            return view('admin/dashboard/dashboard', ['page_title' => 'Dashboard']);
        })->name('admin_dashboard');

        // ------------USER--------------- //
        Route::get('/user', function () {
            return view('admin/user/user', ['page_title' => 'User Accounts']);
        })->name('admin_user');

        // ------------ROLE--------------- //
        Route::get('/role', function () {
            return view('admin/role/role', ['page_title' => 'Roles']);
        })->name('admin_role');

        // ------------POST--------------- //
        Route::get('/post', function () {
            return view('admin/post/post', ['page_title' => 'Posts']);
        })->name('admin_post');

        // ------------FEEDING PROGRAM--------------- //
        Route::get('/feeding_program', function () {
            return view('admin/feeding-program/feeding-program', ['page_title' => 'Feeding Programs']);
        })->name('admin_feeding_program');

        // ------------FAQ--------------- //
        Route::get('/faq', function () {
            return view('admin/faq/faq', ['page_title' => 'FAQs']);
        })->name('admin_faq');
    }
);

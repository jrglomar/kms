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

        // ------------FEEDING PROGRAMS--------------- //
        Route::get('/feeding_programs', function () {
            return view('admin/feeding-program/feeding-program', ['page_title' => 'Feeding Programs']);
        })->name('admin_feeding_program');

        // ------------ANNOUNCEMENTS--------------- //
        Route::get('/announcements', function () {
            return view('admin/announcement/announcement', ['page_title' => 'Announcements']);
        })->name('admin_announcement');

        // ------------INDIVIDUAL RECORDS--------------- //
        Route::get('/individual_records', function () {
            return view('admin/individual-record/individual-record', ['page_title' => 'Individual Records']);
        })->name('admin_individual-record');

        // ------------USERS--------------- //
        Route::get('/users', function () {
            return view('admin/user/user', ['page_title' => 'User Accounts']);
        })->name('admin_user');

        // ------------ROLES--------------- //
        Route::get('/roles', function () {
            return view('admin/role/role', ['page_title' => 'Roles']);
        })->name('admin_role');

        // ------------SLIDESHOW CONTENTS--------------- //
        Route::get('/slideshow_contents', function () {
            return view('admin/slideshow-content/slideshow-content', ['page_title' => 'Slideshow Contents']);
        })->name('admin_post');

        // ------------FAQS--------------- //
        Route::get('/faqs', function () {
            return view('admin/faq/faq', ['page_title' => 'FAQs']);
        })->name('admin_faq');

        // ------------GENERATE REPORTS--------------- //
        Route::get('/generate_reports', function () {
            return view('admin/generate-report/generate-report', ['page_title' => 'Generate Reports']);
        })->name('admin_generate_report');
    }
);

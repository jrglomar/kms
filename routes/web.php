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
    return view('landing-page/landing-page');
});

Route::get('/logout', function () {
    return view('auth/logout', ['page_title' => 'Logout']);
})->name('logout');

Route::group(['middleware' => ['web']], function () {

    Route::get('/login', function () {
        return view('auth/login', ['page_title' => 'Login']);
    })->name('login');

    Route::get('/register', function () {
        return view('auth/register', ['page_title' => 'Register']);
    })->name('register');

    Route::group(
        [
            'middleware' => ['auth:sanctum', 'role.admin'],
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

            Route::get('/feeding_programs/feeding_program/{id}', function ($id) {
                return view('admin/feeding-program/view-feeding-program', ['page_title' => 'Feeding Programs', 'feeding_program_id' => $id]);
            })->name('admin_feeding_program_details');


            // ------------ANNOUNCEMENTS--------------- //
            Route::get('/announcements', function () {
                return view('admin/announcement/announcement', ['page_title' => 'Announcements']);
            })->name('admin_announcement');

            // ------------INDIVIDUAL RECORDS--------------- //
            Route::get('/individual_records', function () {
                return view('admin/individual-record/individual-record', ['page_title' => 'Individual Records']);
            })->name('admin_individual_record');

            Route::get('/individual_records/individual_record/{id}', function ($id) {
                return view('admin/individual-record/view-individual-record', ['page_title' => 'Individual Records', 'individual_record_id' => $id]);
            })->name('admin_individual_record_details');

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

    Route::group(
        [
            'middleware' => ['auth:sanctum', 'role.user'],
            'prefix' => '/user',
        ],
        function () {

            // ------------DASHBOARD--------------- //
            Route::get('/dashboard', function () {
                return view('user/dashboard/dashboard', ['page_title' => 'Dashboard']);
            })->name('user_dashboard');

            // ------------INDIVIDUAL RECORDS--------------- //
            Route::get('/individual_records', function () {
                return view('user/individual-record/individual-record', ['page_title' => 'Individual Records']);
            })->name('user_individual_record');

            Route::get('/individual_records/individual_record/{id}', function ($id) {
                return view('user/individual-record/view-individual-record', ['page_title' => 'Individual Records', 'individual_record_id' => $id]);
            })->name('user_individual_record_details');

            // ------------FEEDING PROGRAMS--------------- //
            Route::get('/feeding_programs', function () {
                return view('user/feeding-program/feeding-program', ['page_title' => 'Feeding Programs']);
            })->name('user_feeding_program');

            Route::get('/feeding_programs/feeding_program/{id}', function ($id) {
                return view('user/feeding-program/view-feeding-program', ['page_title' => 'Feeding Programs', 'feeding_program_id' => $id]);
            })->name('user_feeding_program_details');



            // ------------ANNOUNCEMENTS--------------- //
            Route::get('/announcements', function () {
                return view('user/announcement/announcement', ['page_title' => 'Announcements']);
            })->name('user_announcement');

            // ------------FAQS--------------- //
            Route::get('/faqs', function () {
                return view('user/faq/faq', ['page_title' => 'FAQs']);
            })->name('user_faq');

        }
    );

});



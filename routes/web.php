<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\language\LanguageController;
use App\Http\Controllers\pages\HomePage;
use App\Http\Controllers\pages\Page2;
use App\Http\Controllers\dashboard\Analytics;
use App\Http\Controllers\form_elements\accident;
use App\Http\Controllers\laravel_example\UserManagement;
use App\Http\Controllers\PatientSafetyController;
use App\Http\Controllers\front_pages\Landing;

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

// Main Page Route
Route::get('/', [HomePage::class, 'index'])->name('pages-home');
Route::get('/page-2', [Page2::class, 'index'])->name('pages-page-2');
// locale
Route::get('lang/{locale}', [LanguageController::class, 'swap']);

// front pages
Route::get('/front-pages/landing', [Landing::class, 'index'])->name('front-pages-landing');

// authentication

//dashboard
Route::get('/', [Analytics::class, 'index'])->name('dashboard-analytics');
Route::get('/dashboard/analytics', [Analytics::class, 'index'])->name('dashboard-analytics');

//forms
Route::get('/forms/accident', [accident::class, 'index'])->name('forms-accident');

//formspatientsafety
Route::get('/patientsafety/create', [PatientSafetyController::class, 'create'])->name('patientsafety.create');
Route::post('/patientsafety', [PatientSafetyController::class, 'store'])->name('patientsafety.store');
Route::get('/patientsafety', [PatientSafetyController::class, 'index'])->name('patientsafety.index');



//app

// laravel example
Route::get('/laravel/user-management', [UserManagement::class, 'UserManagement'])->name('laravel-example-user-management');
Route::resource('/user-list', UserManagement::class);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('/');
    })->name('dashboard');
});

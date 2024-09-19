<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\language\LanguageController;
use App\Http\Controllers\pages\HomePage;
use App\Http\Controllers\pages\Page2;
use App\Http\Controllers\pages\MiscError;
use App\Http\Controllers\dashboard\Analytics;
use App\Http\Controllers\form_elements\accident;
use App\Http\Controllers\laravel_example\UserManagement;
use App\Http\Controllers\form_elements\PatientSafetyController;
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

// pages
Route::get('/pages/misc-error', [MiscError::class, 'index'])->name('pages-misc-error');

// authentication

//dashboard
Route::get('/', [Analytics::class, 'index'])->name('dashboard-analytics');
Route::get('/dashboard/analytics', [Analytics::class, 'index'])->name('dashboard-analytics');

//formsaccident
Route::get('/forms/accident', [accident::class, 'index'])->name('forms-accident');
Route::post('/forms/accident', [accident::class, 'store'])->name('accident.store');
route::get('/edit/{id}/accident',[accident::class, 'edit'])->name('edit.accident');
route::post('/edit/{id}/accident',[accident::class, 'update'])->name('update.accident');
route::get('/tables/accident/{id}/hapus',[accident::class, 'delete'])->name('hapus.accident');

//formspatientsafety
Route::get('/patientsafety/create', [PatientSafetyController::class, 'create'])->name('patientsafety.create');
Route::post('/patientsafety/create', [PatientSafetyController::class, 'store'])->name('patientsafety.store');
Route::get('/edit/{id}/patientsafety',[PatientSafetyController::class, 'edit'])->name('edit.patientsafety');
Route::post('/edit/{id}/patientsafety',[PatientSafetyController::class, 'update'])->name('update.patientsafety');
Route::get('/tables/patientsafety/{id}/hapus',[PatientSafetyController::class, 'delete'])->name('hapus.patientsafety');

//tabelLaporan
Route::get('/tables/patientsafety', [PatientSafetyController::class, 'index'])->name('tables-patientsafety');
Route::get('/tables/accident', [accident::class, 'table'])->name('tables-accident');

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

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\RegistrationController;

/*
|----------------------------------------------------------------------
| Public pages (tampilan tetap sama, hanya pindah ke Blade)
|----------------------------------------------------------------------
*/
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/profil', [PageController::class, 'profil'])->name('profil');
Route::get('/kurikulum', [PageController::class, 'kurikulum'])->name('kurikulum');
Route::get('/ekstrakurikuler', [PageController::class, 'ekskul'])->name('ekskul');
Route::get('/ppdb', [PageController::class, 'ppdb'])->name('ppdb');

Route::get('/register', [RegistrationController::class, 'create'])->name('register');
Route::post('/register', [RegistrationController::class, 'store'])->name('register.store');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

/*
|----------------------------------------------------------------------
| Admin (editable)
|   Disarankan pakai auth Laravel Breeze/Jetstream.
|----------------------------------------------------------------------
*/
// Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
//     Route::resource('news', Admin\NewsController::class);
//     Route::resource('programs', Admin\ProgramController::class);
//     Route::resource('testimonials', Admin\TestimonialController::class);
//     Route::resource('extracurriculars', Admin\ExtracurricularController::class);
//     Route::get('settings', [Admin\SettingController::class, 'edit'])->name('settings.edit');
//     Route::put('settings', [Admin\SettingController::class, 'update'])->name('settings.update');
// });

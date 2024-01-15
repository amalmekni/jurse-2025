<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\KeynoteSpeakerController;
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
Route::get('/', [TemplateController::class, 'index'])->name('home');
Route::get('/contact-us', [TemplateController::class, 'contact'])->name('contact-us');
Route::get('/venue', [TemplateController::class, 'venue'])->name('venue');
Route::get('/photo', [TemplateController::class, 'photo'])->name('photo');
Route::get('/commit', [TemplateController::class, 'commit'])->name('commit');
Route::get('/keynote-speakers', [KeynoteSpeakerController::class,'keynote'])->name('keynote');
Route::get('/special', [TemplateController::class, 'special'])->name('special');
Route::get('/sponsors', [TemplateController::class, 'sponsors'])->name('sponsors');
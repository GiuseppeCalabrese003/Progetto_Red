<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;

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

//PUBLIC
Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

// STUDENTI
Route::get('studenti', [StudentController::class , 'index'])->name('studenti');
Route::get('studenti/dettaglio/{id}', [StudentController::class , 'show'])->name('dettaglio-studente');

//DOCENTI
Route::get('docenti', [TeacherController::class , 'index'])->name('docenti');
Route::get('docenti/dettaglio/{id}', [TeacherController::class , 'show'])->name('dettaglio-docente');
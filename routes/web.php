<?php

use App\Http\Controllers\MedicationController;
use App\Http\Controllers\EffectController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

//Medication Routes
Route::get('/medications', [MedicationController::class, 'index']);
Route::get('/medications/create', [MedicationController::class, 'create'])->middleware('auth','can:edit');
Route::get('/medications/about', [MedicationController::class, 'about']);
Route::post('/medications', [MedicationController::class, 'store'])->middleware('auth');
Route::get('/medications/{id}', [MedicationController::class, 'show'])->middleware('auth');
Route::get('/medications/{id}/edit', [MedicationController::class, 'edit'])->middleware('auth', 'can:edit');
Route::patch('/medications', [MedicationController::class, 'update'])->middleware('auth');
Route::delete('/medications', [MedicationController::class, 'destroy'])->middleware('auth');
// Route::get('/', 'MedicationController@index');
// Route::get('/search', 'MedicationController@search')->name('medications.search');
Route::get('/medications/search', [MedicationController::class, 'search']);

//Auth Routes
Route::get('/login', [AuthController::class, 'index'])->name("login");
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);

//Effects Routes
Route::get('/effects', [EffectController::class, 'index']);
Route::get('/effects/{id}', [EffectController::class, 'show'])->middleware('auth');
Route::post('/effects', [EffectController::class, 'store'])->middleware('auth');
Route::get('/effects/{id}', [EffectController::class, 'show'])->middleware('auth');
Route::get('/effects/{id}/edit', [EffectController::class, 'edit'])->middleware('auth', 'can:edit');
Route::patch('/effects', [EffectController::class, 'update'])->middleware('auth');
Route::delete('/effects', [EffectController::class, 'destroy'])->middleware('auth');





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

Route::get('resto/home',
    [App\Http\Controllers\resto\HomeController::class, 'index'])
    ->middleware('can:isResto');
Route::get('kurir/home',
    [App\Http\Controllers\kurir\HomeController::class, 'index'])
    ->middleware('can:isKurir');
Route::get('konsumen/home',
    [App\Http\Controllers\konsumen\HomeController::class, 'index'])
    ->middleware('can:isKonsumen');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('homepage');
})->name('/');
Route::get('bekeszentandras-luxus-apartman', function () {
    return view('avillarol');
})->name('bekeszentandras-luxus-apartman');

Route::get('bekeszentandras-apartman-arak', function () {
    return view('bekeszentandras-arak');
})->name('bekeszentandras-apartman-arak');

Route::get('reggeli', function () {
    return view('reggeli');
})->name('reggeli');

Route::get('bekeszentandras-horgaszat-apartman', function () {
    return view('bekeszentandras-horgaszat-apartman');
})->name('bekeszentandras-horgaszat-apartman');

Route::get('/rollerkolcsonzes', function () {
    return view('rollerberles');
})->name('rollerberles');

Route::get('/joga-es-onismereti-tabor', function () {
    return view('joga');
})->name('joga');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

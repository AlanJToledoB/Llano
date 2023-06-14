<?php

namespace App\Http\Controllers;

use App\Http\Controllers\LlanoController;

use App\Models\Llano;


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



Route::get('/llano', [LlanoController::class, 'index'])->name('llano.index');



Route::get('/planDeEstudio/4to', [LlanoController::class, 'show4to'])->name('planDeEstudio.4to');

Route::get('/planDeEstudio/5to', [LlanoController::class, 'show5to'])->name('planDeEstudio.5to');

Route::get('/planDeEstudio/6to', [LlanoController::class, 'show6to'])->name('planDeEstudio.6to');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

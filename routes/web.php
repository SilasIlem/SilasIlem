<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\historyController;

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
    return view('welcome');
});

Route::get('/dashboard', [App\Http\Controllers\dashingController::class, 'index'])->middleware(['auth'])->name('dashboard');

Route::get('/generate', function () {
    return view('generate');
})->middleware(['auth'])->name('gen');

Route::get('/history', [historyController::class, 'index'])->middleware(['auth'])->name('history');

Route::get('/refer', function () {
    return view('refer');
})->middleware(['auth'])->name('refer');

Route::get('/subscription', function () {
    return view('sub');
})->middleware(['auth'])->name('sub');

require __DIR__ . '/auth.php';

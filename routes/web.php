<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

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
    return view('index');
});

// Route::group(['middleware' => ['auth:sanctum', 'verified']], function() {
//     Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

// Route::middleware(['auth:sanctum', 'verified'])->group(function() {
//     // Route::get('/dashboard', [EventController::class, 'index'])->name('dashboard');
//     Route::resource("dashboard", EventController::class);
// });
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::group(['middleware' => 'auth'], function () {
    Route::resource('events', \App\Http\Controllers\EventController::class);

    Route::resource('users', \App\Http\Controllers\UsersController::class);
});
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Models\Event;

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

Route::group(['middleware' => ['auth', 'verified']], function () {

    Route::resource('events', \App\Http\Controllers\EventController::class);

    Route::resource('users', \App\Http\Controllers\UsersController::class);

    Route::resource('visitors', \App\Http\Controllers\VisitorController::class)->only(['store', 'destroy']);
    
    Route::get('visitors.create', function() {
        
    });
});
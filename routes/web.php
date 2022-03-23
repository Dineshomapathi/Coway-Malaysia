<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeolocationController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/', 'auth.login');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::group(['middleware' => 'auth'], function () {
    Route::resource('tasks', \App\Http\Controllers\TasksController::class);

    Route::resource('users', \App\Http\Controllers\UsersController::class);

    Route::resource('geolocations', \App\Http\Controllers\GeolocationController::class);

    Route::get('/search', [GeolocationController::class, 'search']);

    Route::resource('netsales', \App\Http\Controllers\NetsalesController::class);

    Route::resource('activehp', \App\Http\Controllers\ActivehpController::class);

    Route::resource('apipage', \App\Http\Controllers\ApipageController::class);

    Route::resource('som', \App\Http\Controllers\SOMController::class);
});

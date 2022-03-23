<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeolocationController;
use App\Http\Controllers\NetsalesController;
use App\Http\Controllers\ActivehpController;
use App\Http\Controllers\SOMController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/locationapi', [GeolocationController::class, 'getLocation']);

Route::get('/monthlynetsales/{year}', [NetsalesController::class, 'getMonthlynetsales']);

Route::get('/yearlynetsales', [NetsalesController::class, 'getYearlynetsales']);

Route::get('/activehp', [ActivehpController::class, 'getActivehp']);

Route::get('/som', [SOMController::class, 'getSOM']);

Route::get('/sommontly/{year}', [SOMController::class, 'getSOMMonthly']);
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PotholeController;

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

// '/' return url
Route::get('/hello', function () {
    // view-page apa nak papar kat user
    return view('hello');
});

// get all potholes
Route::get('/potholes', [ PotholeController::class, 'index' ])->name('pothole-listing');

// create new pothole
// save data dalam database
Route::post('/potholes', [ PotholeController::class, 'store' ])->name('pothole-store');

// dapat en page form
Route::get('/pothole/create', [ PotholeController::class, 'create' ])->name('pothole-create');
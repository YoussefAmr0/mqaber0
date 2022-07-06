<?php

use App\Http\Controllers\ContactusController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotosController;
use App\Http\Controllers\StartController;

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
    return view('layout.start');
});

Route::resource("/photos",PhotosController::class);
Route::resource("/contactus",ContactusController::class);
Route::resource("/start",StartController::class);


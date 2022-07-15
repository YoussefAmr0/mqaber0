<?php

use App\Http\Controllers\BadrController;
use App\Http\Controllers\ContactusController;
use App\Http\Controllers\ElfayoumController;
use App\Http\Controllers\ElobourController;
use App\Http\Controllers\ElqatamyaController;
use App\Http\Controllers\ElslamController;
use App\Http\Controllers\ElsokhnaController;
use App\Http\Controllers\MayController;
use App\Http\Controllers\OctoberController;
use Illuminate\Support\Facades\Route;
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

Route::resource("/contactus",ContactusController::class);
Route::resource("/start",StartController::class);
Route::resource("/elslam",ElslamController::class);
Route::resource("/badr",BadrController::class);
Route::resource("/elfayoum",ElfayoumController::class);
Route::resource("/elobour",ElobourController::class);
Route::resource("/elqatamya",ElqatamyaController::class);
Route::resource("/ocotober",OctoberController::class);
Route::resource("/elsokhna",ElsokhnaController::class);
Route::resource("/may",MayController::class);



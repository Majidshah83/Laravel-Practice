<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductdetailController;
use App\Http\Controllers\BannerController;
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

// Route::resource('product',ProductdetailController::class);
Route::resource('banner',BannerController::class); //first we can define route like this
// Route::resource('banner','App\Http\Controllers\BannerController'); also we define route like this as well

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Lat1Controller;

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

Route::get('/halo', function () {

    $datax["nama"] = "<strong>Nur</strong>";

    return view('welcome', $datax);
});

Route::resource('/product' , ProductController::class);

Route::get('/lat1', [Lat1Controller::class, 'index']);

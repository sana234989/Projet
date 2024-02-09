<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController; 
use App\Http\Controllers\ReservationController; 
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



Route::get('/', [homecontroller::class,'index']);
route::get('/reservation', [ReservationController::class,'index']);
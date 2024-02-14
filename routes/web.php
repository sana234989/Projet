<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController; 
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\roomscontroller;
use App\Http\Controllers\roomsdetailcontroller;

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



Route::get('/home', [homecontroller::class,'index']);
route::get('/restauration', [ReservationController::class,'index']);
route::get('/rooms', [roomscontroller::class,'index']);
route::get('/roomsdetail', [roomsdetailcontroller::class,'index']);
Route::get('/roomdetail1', function () {
    return view('roomdetail1');
});
Route::get('/roomdetails2', function () {
    return view('roomdetails2');
});
Route::get('/roomdetail3', function () {
    return view('roomdetail3');
});
Route::get('/roomdetail4', function () {
    return view('roomdetail4');
});
Route::get('/roomdetail5', function () {
    return view('roomdetail5');
});
Route::get('/roomdetail6', function () {
    return view('roomdetail6');
});
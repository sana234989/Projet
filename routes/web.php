<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController; 
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\roomscontroller;
use App\Http\Controllers\roomsdetailcontroller;
use App\Http\Controllers\roomdetail1controller;
use App\Http\Controllers\roomtypecontroller;
use App\Http\Controllers\spaservicecontroller;


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
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');
Route::get('/restauration', function () {
    return view('restauration');
})->name('restaurant');
route::get('/spa',function () {
    return view('spa');
});
route::get('/spadetails', [spaservicecontroller::class,'infospa']);


route::get('/verify', [roomdetail1controller::class,'verifdate'])->name('verifydate');
Route::get('/about', function () {
    return view('aboutus_services');
});
Route::get('/menu', function () {
    return view('reserve');
});
Route::get('/roomstype',[roomtypecontroller::class,'selectionner']);


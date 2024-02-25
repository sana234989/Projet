<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\personelcontroller;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\roomscontroller;
use App\Http\Controllers\roomsdetailcontroller;
use App\Http\Controllers\roomdetail1controller;
use App\Http\Controllers\roomtypecontroller;
use App\Http\Controllers\spaservicecontroller;
use App\Http\Controllers\restaurantcontroller;
use App\Http\Controllers\room1controller;
use App\Http\Controllers\room2controller;
use App\Http\Controllers\room3controller;
use App\Http\Controllers\room4controller;
use App\Http\Controllers\room5controller;
use App\Http\Controllers\room6controller;
use App\Models\espaceevenet;
use App\Models\restaurant_menu;
use App\Models\resataurant;
use App\Models\service;
use App\Models\roomtypess;


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




Route::get('/home', [homecontroller::class,'index'])->name('home');
route::get('/restauration', [ReservationController::class,'index']);
route::get('/rooms', [roomscontroller::class,'index']);
route::get('/roomsdetail', [roomsdetailcontroller::class,'index']);
Route::get('/roomdetail1', [room1controller::class,'inforoom1']);
Route::get('/roomdetail2', [room2controller::class,'inforoom2']);
Route::get('/roomdetail3', [room3controller::class,'inforoom3']);
Route::get('/roomdetail4', [room4controller::class,'inforoom4']);
Route::get('/roomdetail5', [room5controller::class,'inforoom5']);
Route::get('/roomdetail6', [room6controller::class,'inforoom6']);
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');
Route::get('/restauration', [restaurantcontroller::class,'inforest']);
Route::get('/menu_chinose', function () {
    $resultat = resataurant::where('title', 'Chinese restaurant')->pluck('id')->first();
    $donnees = restaurant_menu::where('idresturant', $resultat)->get();
    return view('menu', ['donnees' => $donnees]);
});
Route::get('/about',function(){
    return view('aboutus');
});
Route::get('/service',function(){
    return view('services');
});
Route::get('/menu_marrocain', function () {
    $resultat = resataurant::where('title', 'Marocain restaurant')->pluck('id')->first();
    $donnees = restaurant_menu::where('idresturant',$resultat)->get();
    return view('menu',['donnees' => $donnees]);
});
Route::get('/menu_espagnol', function () {
    $resultat = resataurant::where('title', 'Espagnol restaurant')->pluck('id')->first();
    $donnees = restaurant_menu::where('idresturant',$resultat)->get();
    return view('menu',['donnees' => $donnees]);
});
    

route::get('/spa',function () {
    return view('spa');
});
route::get('/spadetails', [spaservicecontroller::class,'infospa']);


route::get('/verify', [roomdetail1controller::class,'verifdate'])->name('verifydate');

Route::get('/menu', function () {
    return view('reserve');
});
Route::get('/our',[personelcontroller::class,'infopesr']);
Route::get('/roomstype',[roomtypecontroller::class,'selectionner']);
Route::get('/espace_event', function () {
    $donnees = espaceevenet::all();
    return view('espace_event', ['donnees' => $donnees]);    
});
Route::get('/reserve', function () {
    $donnees1 = espaceevenet::all();
    $donnees2 = roomtypess::all();
    $donnees3= service::all();
    return view('reserve', ['donnees1' => $donnees1,'donnees2' => $donnees2,'donnees3' => $donnees3]);    
});

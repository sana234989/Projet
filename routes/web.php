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
use App\Http\Controllers\AuthController;


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





// Route::get('/', function () {
//     return view('welcome');
// });
// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });


Route::post('/logout', [AuthController::class ,'logout'])->name('logout');

Route::get('/', [homecontroller::class,'index'])->name('home');

// Première route pour afficher le formulaire de contact
Route::get('/contact', [ContactController::class, 'show'])->name('contact.show');

// Deuxième route pour traiter l'envoi du formulaire de contact
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');


// route::get('/restauration', [ReservationController::class,'index'])->name('restaurant');
route::get('/rooms', [roomscontroller::class,'index']);
route::get('/roomsdetail', [roomsdetailcontroller::class,'index']);
Route::get('/roomdetail1', [room1controller::class,'inforoom1']);
Route::get('/roomdetail2', [room2controller::class,'inforoom2']);
Route::get('/roomdetail3', [room3controller::class,'inforoom3']);
Route::get('/roomdetail4', [room4controller::class,'inforoom4']);
Route::get('/roomdetail5', [room5controller::class,'inforoom5']);
Route::get('/roomdetail6', [room6controller::class,'inforoom6']);



Route::get('/restauration', [restaurantcontroller::class,'inforest'])->name('restaurant');
Route::get('/restaurant/menu/{id}', [restaurantController::class, 'menu'])->name('restaurant.menu');
// Route::get('/menu/{type}', [restaurantcontroller::class, 'menu'])->name('restaurant.menu');

Route::get('/m', function () {
    $resultat = resataurant::where('title', 'Chinese restaurant')->pluck('id')->first();
    $donnees = restaurant_menu::where('idresturant', $resultat)->get();
    return view('menu', ['donnees' => $donnees]);
})->name('menu_chinose');;
Route::get('/about',function(){
    return view('aboutus');
})->name('about');
Route::get('/service',function(){
    return view('services');
})->name('service');
Route::get('/menu_marrocain', function () {
    $resultat = resataurant::where('title', 'Marocain restaurant')->pluck('id')->first();
    $donnees = restaurant_menu::where('idresturant',$resultat)->get();
    return view('menu',['donnees' => $donnees]);
})->name('menu_marocain');;
Route::get('/menu_espagnol', function () {
    $resultat = resataurant::where('title', 'Espagnol restaurant')->pluck('id')->first();
    $donnees = restaurant_menu::where('idresturant',$resultat)->get();
    return view('menu',['donnees' => $donnees]);
})->name('menu_espagnol');
    
Route::get('/menu_francais', function () {
    $resultat = resataurant::where('title', 'French restaurant')->pluck('id')->first();
    $donnees = restaurant_menu::where('idresturant',$resultat)->get();
    return view('menu',['donnees' => $donnees]);
})->name('menu_french');
    

route::get('/spa',function () {
    return view('spa');
})->name('spa');
route::get('/spadetails', [spaservicecontroller::class,'infospa'])->name('spadetails');


route::get('/verify', [roomdetail1controller::class,'verifdate'])->name('verifydate');

Route::get('/our',[personelcontroller::class,'infopesr']);
Route::get('/roomstype',[roomtypecontroller::class,'selectionner'])->name('rooms');
Route::get('/espace_event', function () {
    $donnees = espaceevenet::all();
    return view('espace_event', ['donnees' => $donnees]);    
})->name('espace_event');
Route::get('/reserve', function () {
    $donnees1 = espaceevenet::all();
    $donnees2 = roomtypess::all();
    $donnees3= service::all();
    return view('reserve', ['donnees1' => $donnees1,'donnees2' => $donnees2,'donnees3' => $donnees3]);    
});



Route::get('/gallery', function () {
    return view('Our_gallery');
})->name('gallary');
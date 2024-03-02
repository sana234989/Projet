<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController; 
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\roomscontroller;
use App\Http\Controllers\roomsdetailcontroller;
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


route::get('/restauration', [ReservationController::class,'index'])->name('restaurant');
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
// Route::get('/login', function () {
//     return view('auth.login');
// })->name('login');

// Route::get('/register', function () {
//     return view('auth.register');
// })->name('register');
Route::get('/restauration', function () {
    return view('restauration');
})->name('restaurant');
route::get('/spa',function () {
    return view('spa');
});
route::get('/spadetails', function () {
    return view('spadetails');
});
Route::get('/spadetails', function () {
    return view('spadetails');
})->name('spadetail');


Route::get('/gallery', function () {
    return view('Our_gallery');
})->name('gallary');
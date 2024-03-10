<?php

namespace App\Http\Controllers;
use App\Models\spa;
use App\Models\spaservice;

use Illuminate\Http\Request;

class spaservicecontroller extends Controller
{
    public function infospa(){
        $spas = spa::all();
        $spadetails = spaservice::all();

    // // Passer les données à la vue
    // return view("spadetails")->with(['spas' => $spas, 'spadetails' => $spadetails]);
    return view("spadetails", compact( 'spas', 'spadetails'));
    }
}

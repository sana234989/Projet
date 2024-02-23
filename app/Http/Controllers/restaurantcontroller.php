<?php

namespace App\Http\Controllers;
use App\Models\resataurant;

use Illuminate\Http\Request;

class restaurantcontroller extends Controller
{
    public function inforest(){
        $restaurant=resataurant::all();
        return view("restauration",compact("restaurant"));
    }
}

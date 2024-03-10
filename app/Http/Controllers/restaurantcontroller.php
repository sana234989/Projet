<?php

namespace App\Http\Controllers;

use App\Models\restaurant_menu;
use App\Models\resataurant;

use Illuminate\Http\Request;

class restaurantcontroller extends Controller
{
    public function inforest(){
        $restaurant=resataurant::all();
        return view("restauration",compact("restaurant"));
    }
    public function menu($restaurantId)
    {

        $donnees = restaurant_menu::where('idresturant', $restaurantId)->get();
        return view('menu', compact('donnees'));
    }

}
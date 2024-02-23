<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\roomtypess;
class roomtypecontroller extends Controller
{
  public function selectionner(){
    $roomstype=roomtypess::all();
    return view("roomstype",compact('roomstype'));
  }
}

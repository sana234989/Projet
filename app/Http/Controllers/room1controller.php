<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\roomtypess;
class room1controller extends Controller
{
   public function inforoom1(){
    $room1=roomtypess::find(1);
    return view('roomdetail1', compact('room1'));
   }
}

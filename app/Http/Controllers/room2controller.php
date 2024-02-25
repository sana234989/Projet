<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\roomtypess;
class room2controller extends Controller
{
    public function inforoom2(){
        $room2=roomtypess::find(2);
        return view('roomdetails2', compact('room2'));
       }
}

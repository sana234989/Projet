<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\roomtypess;
class room3controller extends Controller
{
    public function inforoom3(){
        $room3=roomtypess::find(3);
        return view('roomdetail3', compact('room3'));
       }
}

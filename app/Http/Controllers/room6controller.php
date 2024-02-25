<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\roomtypess;
class room6controller extends Controller
{
    public function inforoom6(){
        $room6=roomtypess::find(6);
        return view('roomdetail6', compact('room6'));
       }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\roomtypess;
class room5controller extends Controller
{
    public function inforoom5(){
        $room5=roomtypess::find(5);
        return view('roomdetail5', compact('room5'));
       }
}

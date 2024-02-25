<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\roomtypess;
class room4controller extends Controller
{
    public function inforoom4(){
        $room4=roomtypess::find(4);
        return view('roomdetail4', compact('room4'));
       }
}

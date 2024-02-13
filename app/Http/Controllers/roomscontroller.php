<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class roomscontroller extends Controller
{
    public function index(){
        return view("rooms");
    }
}

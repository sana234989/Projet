<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;

class acceuillcontroller extends Controller
{
    public function index(){
       return view("navbar");
    }
}

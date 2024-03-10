<?php

namespace App\Http\Controllers;
use App\Models\employe;
use Illuminate\Http\Request;

class personelcontroller extends Controller
{
     public function infopesr()  {
       $per=employe::all();
       return view('ourteam', compact('per'));
     }
}

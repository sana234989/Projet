<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\roomstype;
class Controller extends BaseController
{  
    public function index(){
    $rooms=roomstype::all();
    return view("test",['roomTypes' => $rooms]);
}
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class restaurant_menu extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'restaurant_menus';
}

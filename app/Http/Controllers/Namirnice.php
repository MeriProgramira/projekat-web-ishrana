<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Namirnice extends Controller
{
    public function create(){
        return view('pages.namirnica');
    }
}

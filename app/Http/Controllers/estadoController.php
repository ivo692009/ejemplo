<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class estadoController extends Controller
{
    public function index () {
        
        return view ('estados.index');
    }
}

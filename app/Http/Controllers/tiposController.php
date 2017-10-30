<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tiposController extends Controller
{
    public function index () {
        
        return view ('tipos.index');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class descriptoresController extends Controller
{
    public function index () {

        return view ('descriptores.index');
    }
}

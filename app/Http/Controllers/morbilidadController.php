<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class morbilidadController extends Controller
{
    public function index()
    {
        return view('morbilidad.index');
    }
}

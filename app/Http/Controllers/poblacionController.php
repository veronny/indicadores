<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class poblacionController extends Controller
{
    public function index()
    {
        return view('poblacion.index');
    }
}

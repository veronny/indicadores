<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class vacunacovidController extends Controller
{
    public function index()
    {
        return view('vacuna_covid.index');
    }
}

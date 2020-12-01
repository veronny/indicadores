<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class estrategiasController extends Controller
{
    public function index()
    {
        return view('estrategia.index');
    }
}

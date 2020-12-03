<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class etapavidaController extends Controller
{
    public function index()
    {
        return view('etapa_vida.index');
    }
}

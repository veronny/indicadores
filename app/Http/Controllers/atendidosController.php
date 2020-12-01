<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class atendidosController extends Controller
{
    public function index()
    {
        return view('atendidos.index');
    }
}

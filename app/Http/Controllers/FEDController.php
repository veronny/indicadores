<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FEDController extends Controller
{
    public function index()
    {
        return view('FED.index');
    }
}

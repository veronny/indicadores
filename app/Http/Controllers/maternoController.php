<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class maternoController extends Controller
{
    public function index()
    {
        return view('materno.index');
    }
}

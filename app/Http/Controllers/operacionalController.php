<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class operacionalController extends Controller
{
    public function index()
    {
        return view('operacional.index');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class conveniosgestionController extends Controller
{
    public function index()
    {
        return view('conveniosgestion.index');
    }
}

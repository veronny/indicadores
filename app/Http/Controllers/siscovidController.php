<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class siscovidController extends Controller
{
    public function index()
    {
        return view('siscovid.index');
    }
}

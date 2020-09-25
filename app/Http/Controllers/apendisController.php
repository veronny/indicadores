<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class apendisController extends Controller
{
    public function index()
    {
        return view('apendis.index');
    }
}

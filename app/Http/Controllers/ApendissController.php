<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApendissController extends Controller
{
    public function index()
    {
        return view('apendis.index');
    }
}

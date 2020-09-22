<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PadronNominalController extends Controller
{
    public function index()
    {
        return view('PadronNominal.index');
    }
}

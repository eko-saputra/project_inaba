<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SDController extends Controller
{
    public function index()
    {
        return view('sd/index');
    }
}

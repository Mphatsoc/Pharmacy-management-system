<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RivController extends Controller
{
    public function ask()
    {
        return view('riv');
    }
}

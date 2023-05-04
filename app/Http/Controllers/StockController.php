<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StockController extends Controller
{
    public function meds()
    {
        return view('stock');
    }
    public function drugs()
    {
        return view('card');
    }

}
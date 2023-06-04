<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicine;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class MedicineController extends Controller
{

    public function displayData()
    {
        $medicines = Medicine::all();
        return view('stock', compact('medicines'));
    }

}

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
    public function store(Request $request)
{
    $medicine = new Medicine();
    $medicine->medicine_name = $request->input('medicine_name');
    $medicine->quantity_on_hand = $request->input('quantity_on_hand');
    $medicine->save();

    // Add the new medicine to the $medicines array
    $medicines[] = $medicine;

    return redirect()->back();
}


}

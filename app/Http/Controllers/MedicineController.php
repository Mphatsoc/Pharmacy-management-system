<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicine;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class MedicineController extends Controller
{
//This method retrieves all the medicines from the Medicine model and passes them to the 'stock' view
    public function displayData()
    {
        $medicines = Medicine::all();
        return view('stock', compact('medicines'));
    }
    //This method handles the logic for storing a new medicine in the database.
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

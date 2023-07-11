<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Medicine;
use App\Models\Strength;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class MedicineController extends Controller
{
//This method retrieves all the medicines from the Medicine model and passes them to the 'stock' view
    /**
     * @return Application|Factory|View
     * pass data from database to view
     * return view stock
     */
    public function displayData()
    {
        $medicines = Medicine::all();
        $strengths = Strength::all();
        return view('stock', compact('medicines','strengths'));
    }
    //This method handles the logic for storing a new medicine in the database.

    /**
     * @param Request $request
     * @return RedirectResponse
     * create new medicine instance
     */
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

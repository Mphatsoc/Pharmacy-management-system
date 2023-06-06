<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicine;
use App\Models\Quantity;
use App\Models\StockCard;

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

    public function viewStockCard ($medicine_name)
    {

    }
    public function show()
    {
        $medicines = Medicine::all();
        return view('show_stock', compact('medicines'));
    }
 



}
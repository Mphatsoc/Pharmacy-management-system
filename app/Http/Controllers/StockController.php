<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Models\Medicine;
use App\Models\Quantity;
use App\Models\StockCard;

class StockController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function meds()
    {
        return view('stock');
    }

    /**
     * @return Application|Factory|View
     */
    public function drugs()
    {
        return view('card');
    }

    public function viewStockCard ($medicine_name)
    {

    }

    /**
     * @return Application|Factory|View
     */
    public function show()
    {
        $medicines = Medicine::all();
        return view('show_stock', compact('medicines'));
    }




}

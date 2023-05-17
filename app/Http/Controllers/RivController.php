<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Riv;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class RivController extends Controller
{
    function storeData(Request $request){

        $riv = new Riv;
        $riv->item_description=$request->item_description;
        $riv->strength=$request->strength;
        $riv->stock_balance=$request->stock_balance;
        $riv->quantity_requested=$request->quantity_requested;
        $riv->quantity_issued_by_pharmacy=$request->quantity_issued_by_pharmacy;
        $riv->quantity_collected_from_pharmacy=$request->quantity_collected_from_pharmacy;
        $riv->save();

   
    Session::flash('success', 'Data added successfully!');

    return redirect()->back();

    }
    public function showData()
    {
        $rivs = Riv::all();
        return view('riv-list', compact('rivs'));
    }

    public function removeData($id)
    {
    $riv = Riv::findOrFail($id);
    $riv->delete();

    Session::flash('success', 'Data deleted successfully!');

    return redirect()->back();
    }

}

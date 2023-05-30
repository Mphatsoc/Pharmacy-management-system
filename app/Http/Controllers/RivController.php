<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Riv;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class RivController extends Controller
{
    function storeData(Request $request){

        $Riv = new Riv;
        $Riv->item_description=$request->item_description;
        $Riv->strength=$request->strength;
        $Riv->stock_balance=$request->stock_balance;
        $Riv->quantity_requested=$request->quantity_requested;
        $Riv->quantity_Rivd_by_pharmacy=$request->quantity_Rivd_by_pharmacy;
        $Riv->quantity_collected_from_pharmacy=$request->quantity_collected_from_pharmacy;
        $Riv->save();

   
    Session::flash('success', 'Data added successfully!');

    return redirect()->back();

    }
    public function showData()
    {
        $Rivs = Riv::all();
        return view('riv-list', compact('rivs'));
    }

    public function removeData($id)
    {
    $Riv = Riv::findOrFail($id);
    $Riv->delete();

    Session::flash('success', 'Data deleted successfully!');

    return redirect()->back();
    }

}

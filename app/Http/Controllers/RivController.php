<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Issue;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class RivController extends Controller
{
    function storeData(Request $request){

        $issue = new Issue;
        $issue->item_description=$request->item_description;
        $issue->strength=$request->strength;
        $issue->stock_balance=$request->stock_balance;
        $issue->quantity_requested=$request->quantity_requested;
        $issue->quantity_issued_by_pharmacy=$request->quantity_issued_by_pharmacy;
        $issue->quantity_collected_from_pharmacy=$request->quantity_collected_from_pharmacy;
        $issue->save();

   
    Session::flash('success', 'Data added successfully!');

    return redirect()->back();

    }
   
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quantity;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class InventoryController extends Controller
{
    function addData(Request $request){

        $quantity = new Quantity;
        $quantity->date=$request->date;
        $quantity->quantity_recieved=$request->quantity_recieved;
        $quantity->quantity_issued=$request->quantity_issued;
        $quantity->quantity_on_hand=$request->quantity_on_hand;
        $quantity->losses=$request->losses;
        $quantity->save();

   
    Session::flash('success', 'Data added successfully!');

    return redirect()->back();

    }

    public function displayData()
    {
        $quantities = Quantity::all();
        return view('quantity-list', compact('quantities'));
    }

    public function deleteData(){
        $quantities = Quantity::all();
        $quantites->delete();
        return view('quantity-list', compact('quantities'));

    }

    
 

}

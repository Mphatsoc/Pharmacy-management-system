<?php

namespace App\Http\Controllers;

use App\Models\Medicine;
use Illuminate\Http\Request;
use App\Models\Quantity;
use App\Models\StockCard;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class InventoryController extends Controller
{
    function addData(Request $request, $id){

        $medicine = Medicine::findorFail($id);

        // Retrive input values from the request
        $quantityReceived = $request->input('quantity_received');
    $losses = $request->input('losses');
    $quantityIssued = $request->input('quantity_issued');
    $originalQuantityOnHand = $request->input('original_quantity_on_hand');

    $loss = $losses + $quantityIssued;

    // Calculate the new quantity on hand
    $newQuantityOnHand = $originalQuantityOnHand + $quantityReceived - $loss;

    // Update the medicine's quantity on hand
    $medicine->quantity_on_hand = $newQuantityOnHand;
    $medicine->save();

        $StockCard = new StockCard;
        $StockCard-> medicine_name = $medicine->medicine_name;
        $StockCard->date=$request->date;
        $StockCard->quantity_received=$request->quantity_received;
        $StockCard->quantity_issued=$request->quantity_issued;
        $StockCard->quantity_on_hand=$medicine->quantity_on_hand;
        $StockCard->losses=$request->losses;
        $StockCard->save();

   
     Session::flash('success', 'Data added successfully!');

     return redirect()->back();

    }

    public function displayQuantity(Medicine $medicine){
      
        
        return view('quantity', [
            'id' => $medicine->id,
            'medicine' => $medicine,
        ]);

    }

    public function dis() {
      
        return view('stk');
    }

    public function displayData($id)
    { 
        $medicine = Medicine::findorFail($id);
        
        $StockCard = StockCard::where('medicine_name', $medicine->medicine_name)->get();
        return view('quantity-list', compact('StockCard'));
    }

    public function deleteData($id)
    {
    $quantity = Quantity::findOrFail($id);
    $quantity->delete();

    Session::flash('success', 'Data deleted successfully!');

    return redirect()->back();
    }

    public function cancelData($id)  {
    $StockCard = StockCard::findOrFail($id);
    $StockCard->delete();

    Session::flash('success', 'Data deleted successfully!');

    return redirect()->back();
    }
     

    


    
    

}

<?php

namespace App\Http\Controllers;

use App\Models\Medicine;
use Illuminate\Http\Request;
use App\Models\Quantity;
use App\Models\StockCard;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;

//This method is responsible for adding data related to a medicine in the inventory


class InventoryController extends Controller
{
   

    function addData(Request $request, $id)
    {
        $medicine = Medicine::findOrFail($id);

// Retrieve input values from the request
$quantityReceived = $request->input('quantity_received');
$losses = $request->input('losses');
$quantityIssued = $request->input('quantity_issued');
$originalQuantityOnHand = $medicine->quantity_on_hand;

// Calculate the new quantity on hand
$newQuantityOnHand = $originalQuantityOnHand + $quantityReceived - ($quantityIssued + $losses);

// Ensure the quantity on hand doesn't go below zero
$newQuantityOnHand = max(0, $newQuantityOnHand);

// Update the medicine's quantity on hand
$medicine->quantity_on_hand = $newQuantityOnHand;
$medicine->save();

// Create a new StockCard instance
$stockCard = new StockCard;
$stockCard->medicine_name = $medicine->medicine_name;
$stockCard->date = Carbon::now()->format('Y-m-d');
$stockCard->quantity_received = $quantityReceived;
$stockCard->quantity_issued = $quantityIssued;
$stockCard->quantity_on_hand = $newQuantityOnHand;
$stockCard->losses = $losses;
$stockCard->original_quantity_on_hand = $originalQuantityOnHand;
$stockCard->new_quantity_on_hand = $newQuantityOnHand;
$stockCard->save();

Session::flash('success', 'Stock Updated Successfully!');

return redirect()->back()->with('success', 'Stock Updated Successfully');

    }
    
    //This method is used to display the quantity of a specific medicine.

    public function displayQuantity(Medicine $medicine){
      
        
        return view('quantity', [
            'id' => $medicine->id,
            'medicine' => $medicine,
        ]);

    }

    public function dis() {
      
        return view('stk');
    }
    //This method is responsible for displaying the updated medicine information in the stock card

    public function displayData($id)
    { 
        $medicine = Medicine::findorFail($id);
        
        $StockCard = StockCard::where('medicine_name', $medicine->medicine_name)->get();
        return view('quantity-list', [
            'id' => $medicine->id,
            'medicine' => $medicine,
        ], compact('StockCard'));
    }
    //This method is used to delete data related to a quantity entry.

    public function deleteData($id)
    {
    $quantity = Quantity::findOrFail($id);
    $quantity->delete();

    Session::flash('success', 'Data deleted successfully!');

    return redirect()->back();
    }

    //This method is used to delete data related to a stock card entry

    public function cancelData($id)  {
    $StockCard = StockCard::findOrFail($id);
    $StockCard->delete();



    
    


    Session::flash('success', 'Data deleted successfully!');

    return redirect()->back();
    }   

}

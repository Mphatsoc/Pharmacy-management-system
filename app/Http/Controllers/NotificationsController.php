<?php
namespace App\Http\Controllers;
use App\Models\Riv;
use App\Models\User;
use App\Models\StockCard;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Medicine;
use Carbon\Carbon;



class NotificationsController extends Controller
{
    public function generate()
    {
        $stockCards = StockCard::all(['id','date', 'medicine_name', 'quantity_received', 'quantity_issued','quantity_on_hand', 'losses']);
        $rivs = Riv::all();
    
        return view('report', compact('stockCards','rivs'));
    }

    public function note(){

        $rivs = Riv::all();
        $Users = User::where('role', 'user')->get(['department']);

        return view('show_notifications', compact('Users', 'rivs'));
    }
    public function approved($id)
    {
        $riv = Riv::find($id);
     
    
        // Subtract the medicine quantity
        $medicine = Medicine::where('medicine_name', $riv->medicine_name)
                            ->first();
    
        if ($medicine) {
            if ($medicine->quantity_on_hand < $riv->quantity_requested) {
                // Medicine quantity is insufficient, display error message
                return redirect()->back()->withErrors(['error' => 'Insufficient quantity of medicine']);
            }

            $riv->status = 'Approved';
            $riv->save();
    
            $newQuantityOnHand = $medicine->quantity_on_hand - $riv->quantity_requested;
            $newQuantityOnHand = max(0, $newQuantityOnHand); // Ensure quantity doesn't go negative
    
            // Calculate the quantity issued by subtracting the difference from the original quantity on hand
            $quantityIssued = $medicine->quantity_on_hand - $newQuantityOnHand;
    
            $medicine->quantity_on_hand = $newQuantityOnHand;
            $medicine->save();
    
            // Create a new StockCard instance
            $stockCard = new StockCard;
            $stockCard->medicine_name = $medicine->medicine_name;
            $stockCard->date = Carbon::now()->format('Y-m-d');
            $stockCard->quantity_received = 0;
            $stockCard->quantity_issued = $quantityIssued;
            $stockCard->quantity_on_hand = $newQuantityOnHand;
            $stockCard->losses = 0;
            $stockCard->original_quantity_on_hand = $medicine->quantity_on_hand + $quantityIssued;
            $stockCard->new_quantity_on_hand = $newQuantityOnHand;
            $stockCard->save();
        } else {
            // Medicine not found, display error message
            return redirect()->back()->withErrors(['error' => 'Medicine not found']);
        }
    
        return redirect()->back();
    }
    
    
    public function declined($id)
    {
    $riv = Riv::find($id);
    $riv->status='Declined';
    $riv->save();

    return redirect()->back();
    }




   

}
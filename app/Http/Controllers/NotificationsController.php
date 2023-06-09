<?php
namespace App\Http\Controllers;
use App\Models\Riv;
use App\Models\User;
use App\Models\StockCard;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class NotificationsController extends Controller
{
    public function generate()
    {
        $stockCards = StockCard::all(['id', 'medicine_name', 'quantity_received', 'quantity_issued','quantity_on_hand', 'losses']);
    
        return view('report', compact('stockCards'));
    }

    public function note(){

        $rivs = Riv::all();
        $Users = User::where('role', 'user')->get(['department']);

        return view('show_notifications', compact('Users', 'rivs'));
    }
    public function approved($id)
    {
    $riv = Riv::find($id);
    $riv->status='Approved';
    $riv->save();

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
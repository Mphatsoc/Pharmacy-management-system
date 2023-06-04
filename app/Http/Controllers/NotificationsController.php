<?php
namespace App\Http\Controllers;
use App\Models\Riv;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class NotificationsController extends Controller
{
    public function note(){

        $rivs = Riv::all();
        return view('show_notifications',  compact('rivs'));
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
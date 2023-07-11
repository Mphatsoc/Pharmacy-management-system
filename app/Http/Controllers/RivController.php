<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Riv;
use App\Models\Medicine;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class RivController extends Controller
{
    //This method handles the logic for storing a new RIV
    /**
     * @param Request $request
     * @return RedirectResponse
     */
    function storeData(Request $request){

        // $medicine = Medicine::where('medicine_name', $request->medicine_name)->first();
        // $medicines = Medicine::all();

        $riv = new Riv;
        $riv->date=$request->date;
        // $riv->item_description=$request->item_description;
        $riv->strength=$request->strength;
        $riv->stock_balance=$request->stock_balance;
        $riv->quantity_requested=$request->quantity_requested;
        $riv->quantity_issued_by_pharmacy=$request->quantity_issued_by_pharmacy;
        $riv->quantity_collected_from_pharmacy=$request->quantity_collected_from_pharmacy;
        $riv->medicine_name=$request->medicine_name;
        $riv->department=$request->department;
        $riv->status='In Progress';
        $riv->save();


     Session::flash('success', 'Riv Sent Successfully!');

     return redirect()->back()->with('success', 'Riv Sent Successfully');


    }
    //This method retrieves all the RIVs from the Riv model and passes them to the 'riv-list' view

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function showData()
    {
        $rivs = Riv::all();
        return view('riv-list', compact('rivs'));
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function editData($id){
        $riv = Riv::find($id);
        return view('edit', ['riv'=>$riv]);
    }
    //This method handles the deletion of a specific RIV with the given ID

    /**
     * @param $id
     * @return RedirectResponse
     */
    public function removeData($id)
    {
    $Riv = Riv::findOrFail($id);
    $Riv->delete();

    Session::flash('success', 'Data deleted successfully!');

    return redirect()->back();
    }


}

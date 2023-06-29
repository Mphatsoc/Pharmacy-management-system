<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicine;


class SearchController extends Controller
{
    public function index(Request $request)
    {
        $searchQuery = $request->input('search');

        $results = Medicine::where('medicine_name', 'like', '%' . $searchQuery . '%')
            ->orWhere('quantity_on_hand', 'like', '%' . $searchQuery . '%')
            ->get();

        return view('stock', compact('results'));
    }
}

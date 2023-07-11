<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Models\Medicine;


class SearchController extends Controller
{
    /**
     * @param Request $request
     * @return Application|Factory|View
     * Query medicine table in datatabase
     */
    public function index(Request $request)
    {
        $searchQuery = $request->input('search');

        $results = Medicine::where('medicine_name', 'like', '%' . $searchQuery . '%')
            ->orWhere('quantity_on_hand', 'like', '%' . $searchQuery . '%')
            ->get();

        return view('stock', compact('results'));
    }
}

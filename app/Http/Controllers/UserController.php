<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function depo()
    {
        return view('user');
    }

    public function updateSelectedDepartment(Request $request)
    {
        $user = Auth::user(); // Get the authenticated user

        // Update the selected department in the user's record
        $user->selected_department = $request->input('department');
        $user->save();

        return response()->json(['success' => true]);
    }

    public function fetchSelectedDepartment()
{
    $user = Auth::user(); // Get the authenticated user

    $department = $user->selected_department;

    return response()->json(['success' => true, 'department' => $department]);
}
}

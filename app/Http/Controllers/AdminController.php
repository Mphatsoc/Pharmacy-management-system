<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function AdminDashboard(){
        return view('admin.admin_dashboard');
    }
    //
}

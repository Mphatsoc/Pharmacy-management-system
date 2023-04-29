<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificationsController extends Controller
{
    public function accept()
    {
        return view('notifications');
    }
    public function generate()
    {
        return view('report');
    }
    public function decline()
    {
        return view('notify');
    }
}

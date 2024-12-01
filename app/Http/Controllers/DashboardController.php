<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function adminDashboard()
    {
        return view('dashboards.admin');
    }

    public function userDashboard()
    {
        return view('dashboards.user');
    }
}

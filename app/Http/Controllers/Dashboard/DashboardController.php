<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Show the dashboard index page.
     *
     * @return void
     */
    public function index()
    {
        return view('dashboard.index');
    }
}

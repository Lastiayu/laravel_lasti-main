<?php

namespace App\Http\Controllers;
use App\Models\Dashboard;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $dashboard = Dashboard::all(); // Gantilah dengan query atau data yang sesuai
        return view('dashboard.index', compact('dashboard'));
    }
}

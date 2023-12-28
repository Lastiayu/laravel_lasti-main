<?php

namespace App\Http\Controllers;
use App\Models\Dashboard;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $sponsor = Dashboard::latest()->paginate(10);
        return view('dashboard.index', compact('dashboard'));
    }
}

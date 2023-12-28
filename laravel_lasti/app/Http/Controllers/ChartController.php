<?php

namespace App\Http\Controllers;

use App\Charts\MonthlySponsorChart;
use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function showChart(MonthlySponsorChart $monthlySponsorChart)
    {
        $chart = $monthlySponsorChart->build();

        return view('chart.index', compact('chart'));
    }
}

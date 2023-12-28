<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use App\Models\Sponsor;

class MonthlySponsorChart {


protected $chart;

public function __construct (LarapexChart $chart)
{
    $this->chart = $chart;

}

public function build(): \ArielMejiaDev\LarapexCharts\RadialChart
{

    $sponsor = DB::table('sponsor')
    ->select(DB::raw('EXTRACT(MONTH FROM created_at) as month, *'))
    ->groupBy('month')->get();
    $data= [
        $sponsor->where('januari')->count(),
        $sponsor->where('februari')->count(),
        $sponsor->where('maret')->count(),
        $sponsor->where('april')->count(),
        $sponsor->where('mei')->count(),
        $sponsor->where('juni')->count(),
        $sponsor->where('juli')->count(),
        $sponsor->where('agustus')->count(),
        $sponsor->where('september')->count(),
        $sponsor->where('oktober')->count(),
        $sponsor->where('november')->count(),
        $sponsor->where('desember')->count(),

    ];

    $label = [
        'januari',
        'februari',
        'maret',
        'april',
        'mei',
        'juni',
        'juli',
        'agustus',
        'september',
        'oktober',
        'november',
        'desember',
    ];

    return $this->chart->radialChart()
    ->setTitle('Jumlah Sponsor Per Bulan   ')
    ->setSubtitle(date('M'))
    ->setWidth(500)
    ->setHeight(500)
    ->addData($data)
    ->setLabels([$label])
    ->setColors(['#FF0000', '#FFA500', '#FFFF00', '#0F9D58', '#1C52FB', '#CC8899', '#0A0A0A', '#F36196', '#80471C', '#073B3A', '#F97272', '#21D375'])
    ->container();

}

}

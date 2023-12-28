<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use App\Models\Sponsor;
use Illuminate\Support\Facades\DB;

class MonthlySponsorChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build()
    {
        $sponsor = DB::table('sponsors')
            ->select(DB::raw('EXTRACT(MONTH FROM created_at) as month'))
            ->groupBy('month')->get();

        $data = [
            $sponsor->where('month', 1)->count(),
            $sponsor->where('month', 2)->count(),
            $sponsor->where('month', 3)->count(),
            $sponsor->where('month', 4)->count(),
            $sponsor->where('month', 5)->count(),
            $sponsor->where('month', 6)->count(),
            $sponsor->where('month', 7)->count(),
            $sponsor->where('month', 8)->count(),
            $sponsor->where('month', 9)->count(),
            $sponsor->where('month', 10)->count(),
            $sponsor->where('month', 11)->count(),
            $sponsor->where('month', 12)->count(),
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

        $chart = $this->chart->radialChart()
            ->setTitle('Jumlah Sponsor Per Bulan')
            ->setSubtitle(date('M'))
            ->setWidth(500)
            ->setHeight(500)
            ->addData($data)
            ->setLabels($label)
            ->setColors(['#FF0000', '#FFA500', '#FFFF00', '#0F9D58', '#1C52FB', '#CC8899', '#0A0A0A', '#F36196', '#80471C', '#073B3A', '#F97272', '#21D375']);

        return $chart;
    }
}

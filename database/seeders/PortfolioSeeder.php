<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Portfolio;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $portfolios = [
            [
                'title' => 'progetto 1',
                'description' => 'descrizione lunga',
                'thumb' => 'ulr img',
            ],
            [
                'title' => 'progetto 2',
                'description' => 'descrizione lunga 2',
                'thumb' => 'ulr img 2',
            ],
        ];
        foreach ($portfolios as $portfolio) {

            $new_portfolio = new Portfolio();
            $new_portfolio->title = $portfolio['title'];
            $new_portfolio->description = $portfolio['description'];
            $new_portfolio->thumb =  $portfolio['thumb'];
            $new_portfolio->save();
        }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Country;

class CountriesTableSeeder extends Seeder
{
    public function run()
    {
        Country::query()->delete();

        $Countries = [
            'Albania', 'Belgium', 'Bulgaria', 'Canada', 'Croatia',
            'Czech Republic', 'Denmark', 'Estonia', 'Finland', 'France',
            'Germany', 'Greece', 'Hungary', 'Iceland', 'Italy',
            'Latvia', 'Lithuania', 'Luxembourg', 'Montenegro', 'Netherlands',
            'North Macedonia', 'Norway', 'Poland', 'Portugal', 'Romania',
            'Slovakia', 'Slovenia', 'Spain', 'Turkey', 'United Kingdom',
            'United States'
        ];

        foreach ($Countries as $countryName) {
            Country::create(['name' => $countryName]);
        }
    }
}


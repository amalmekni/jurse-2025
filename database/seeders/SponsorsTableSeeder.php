<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Sponsor;

class SponsorsTableSeeder extends Seeder
{
    public function run()
    {
        // Clear existing data
        Sponsor::truncate();

        // Seed sponsors data
        $sponsorsData = [
            [
                'src' => 'https://jurse2023.org/images/sponsors/ieee.png',
                'alt' => 'ieee',
                'spo_order' => 1,
            ],
            [
                'src' => 'https://jurse2023.org/images/sponsors/grss.png',
                'alt' => 'grss',
                'spo_order' => 2,
            ],
            // Add more sponsors as needed
        ];

        // Insert data into the sponsors table
        foreach ($sponsorsData as $sponsor) {
            Sponsor::create($sponsor);
        }
    }
}

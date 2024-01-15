<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Author;
use App\Models\Country;

class AuthorsTableSeeder extends Seeder
{
    public function run()
    {
        $this->call(CountriesTableSeeder::class);

        Author::query()->delete();


        $authorsData = [
            ['Felix', 'Bachofer', 'German Aerospace Center (DLR)', 'Germany'],
            ['Andrea', 'Reimuth', 'Ludwig-Maximilians-University of Munich', 'Germany'],
            ['Germain', 'Forestier', 'Universite de Haute-Alsace, IRIMAS', 'France'],
            ['Jonathan', 'Weber', 'Universite de Haute-Alsace, IRIMAS', 'France'],
            ['Camille', 'Kurtz', 'Universite Paris Cite, LIPADE', 'France'],
            ['Sylvain', 'Lobry', 'Universite Paris Cite, LIPADE', 'France'],
            ['Charlotte', 'Pelletier', 'Universite Bretagne Sud, IRISA', 'France'],

        ];

        foreach ($authorsData as $author) {
            $country = Country::where('name', $author[3])->first();

            if ($country) {
                Author::create([
                    'firstname' => $author[0],
                    'lastname' => $author[1],
                    'organisme' => $author[2],
                    'country_id' => $country->id,
                ]);
            }
        }
    }
}


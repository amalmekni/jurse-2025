<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SpecialSession;
use App\Models\Author;

class SpecialSessionsTableSeeder extends Seeder
{
    public function run()
    {
        SpecialSession::query()->delete();

        // Find existing authors
        $felixBachofer = Author::where('firstname', 'Felix')->where('lastname', 'Bachofer')->first();
        $andreaReimuth = Author::where('firstname', 'Andrea')->where('lastname', 'Reimuth')->first();

        // If authors don't exist, you may want to handle this scenario appropriately

        // Special session data
        $specialSessionData = [
            [
                'title' => 'Future settlement growth modelling with EO products',
                'description' => 'Earth observation (EO)-based information products have been used successfully in science, planning and by decision-makers for years...',
                'spe_order' => 1,
            ],
        ];

        // Insert data into the special_sessions table
        foreach ($specialSessionData as $session) {
            $specialSession = SpecialSession::create($session);

            // Attach existing authors with the special session
            if ($felixBachofer) {
                $specialSession->authors()->attach($felixBachofer->id);
            }

            if ($andreaReimuth) {
                $specialSession->authors()->attach($andreaReimuth->id);
            }
        }
    }
}

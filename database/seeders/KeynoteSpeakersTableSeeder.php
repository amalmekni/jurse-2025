<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\KeynoteSpeaker;

class KeynoteSpeakersTableSeeder extends Seeder
{
    public function run()
    {
        KeynoteSpeaker::truncate();

        KeynoteSpeaker::create([
            'firstname' => 'Gustau',
            'lastname' => 'Camps-Valls',
            'description' => 'Prof. Gustau Camps-Valls (born 1972 in València) is a Physicist and Full Professor in Electrical Engineering in the Universitat de València, Spain, where lectures on machine learning, remote sensing and signal processing. He is the Head of the Image and Signal Processing (ISP) group, an interdisciplinary group of 40 researchers working at the intersection of AI for Earth and Climate sciences.',
            'website' => 'https://isp.uv.es',
        ]);

        KeynoteSpeaker::create([
            'firstname' => 'Lisa',
            'lastname' => 'Schipper',
            'description' => 'Dr. Lisa Schipper is an Environmental Social Science Research Fellow at the Environmental Change Institute (ECI) at the University of Oxford and a Visiting Researcher at the University of Vienna. Her research looks at fairness in development in the context of climate change, focussing on adaptation and vulnerability to climate change in the Global South.',
            'website' => 'https://www.eci.ox.ac.uk',
        ]);

        KeynoteSpeaker::create([
            'firstname' => 'Evangelos',
            'lastname' => 'Gerasopoulos',
            'description' => 'Dr. Evangelos Gerasopoulos is a Research Director at the Institute for Environmental Research and Sustainable Development of the National Observatory of Athens (NOA). In his research career, he has published 115 publications in peer reviewed journals and more than 150 in conferences, widely recognized by the scientific community (4150 citations, h-index-38), and he has participated in/coordinated more than 40 European and national projects.',
            'website' => 'http://www.greekgeo.noa.gr',
        ]);

        KeynoteSpeaker::create([
            'firstname' => 'Ioannis',
            'lastname' => 'Anastasakis',
            'description' => 'Mr. Ioannis Anastasakis is the Vice Mayor of Technical Projects, Urban Green Space & Daily Affairs of the Heraklion Municipality and an elected member of the Heraklion City Council. He is a Civil Engineer (NTUA, MSc) and in the past he served public positions of the Heraklion Municipality; Ministry of Environment, Planning and Public Works; Region of Crete; Heraklion Port Authority SA; and Anogia Municipality.',
            'website' => 'https://www.heraklion.gr',
        ]);

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KeynoteSpeaker;

class KeynoteSpeakerController extends Controller
{
    public function keynote()
    {
        $keynoteSpeakers = KeynoteSpeaker::all();
        

        return view('frontend.keynote-speakers', compact('keynoteSpeakers'));
    }
}

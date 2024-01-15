<?php

namespace App\Http\Controllers;
use App\Models\special;
use App\Models\SpecialSession;
use App\Models\Sponsor;
use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function index()
    {
        return view('frontend.home');
    }

    public function contact()
    {
        return view(' frontend.contact-us');
    }

    public function venue()
    {
        return view(' frontend.venue');
    }
    public function photo()
    {
        return view(' frontend.photo');
    }
    public function commit()
    {
        return view(' frontend.commit');
    }
    public function special()
    {
        $SpecialSession = SpecialSession::all();
        return view(' frontend.special', compact('SpecialSession'));
    }

    public function sponsors()
    {
        $Sponsors = Sponsor::all();
        return view ('frontend.sponsors',compact('Sponsors'));
    }
    
   

}

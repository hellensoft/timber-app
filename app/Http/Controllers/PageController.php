<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Return Pages

    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function tetema()
    {
        return view('tours.tetema');
    }
    
    public function pamoja()
    {
        return view('tours.pamoja');
    }

    public function rose()
    {
        return view('tours.rose');
    }

    public function lina()
    {
        return view('tours.lina');
    }

    public function ansi()
    {
        return view('tours.ansi');
    }

    public function sharma()
    {
        return view('tours.sharma');
    }

    public function tarangire()
    {
        return view('trips.tarangire');
    }

    public function manyara()
    {
        return view('trips.manyara');
    }

    public function arusha()
    {
        return view('trips.arusha');
    }

    public function ngorongoro()
    {
        return view('trips.ngorongoro');
    }

    public function culture()
    {
        return view('culture');
    }

    public function momela()
    {
        return view('trekks.momela');
    }

    public function miriakamba()
    {
        return view('trekks.miriakamba');
    }

    public function rongai()
    {
        return view('trekks.rongai');
    }

    public function northern()
    {
        return view('trekks.northern');
    }
    
    public function contact()
    {
        return view('contact');
    }

}

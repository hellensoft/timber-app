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

}

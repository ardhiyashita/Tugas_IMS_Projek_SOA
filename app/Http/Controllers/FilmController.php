<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function landingPage(Type $var = null)
    {
        return view('landing');
    }
}

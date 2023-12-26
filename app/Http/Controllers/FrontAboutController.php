<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontAboutController extends Controller
{
    public function about_us(){
        return view('front-end.about-us');
    }
}

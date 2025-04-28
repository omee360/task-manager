<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Home page ko render karta hai
    // Ye home.blade.php view ko return karta hai
    public function home()
    {
        return view('home');
    }

    // About page ko render karta hai
    // Ye about.blade.php view ko return karta hai
    public function about()
    {
        return view('about');
    }
}

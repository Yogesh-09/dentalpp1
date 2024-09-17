<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index()
    {
        // Public folder ke andar images ka array banayein
        $sliders = [
            'slider1.jpg',
            'slider2.jpg',
            'slider3.jpg'
        ];

        // Blade view mein images pass karein
        return view('home', compact('sliders'));
    }
}


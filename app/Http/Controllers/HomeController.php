<?php

namespace App\Http\Controllers;

use App\Http\Services\SliderServices;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $slider;

    public function __construct(SliderServices $slider)
    {
        $this->slider = $slider;
    }

    public function index()
    {
        $sliders = $this->slider->getAll();

        return view('home',
            [
                'sliders' => $sliders
            ]
        );
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }
}

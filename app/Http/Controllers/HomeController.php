<?php

namespace App\Http\Controllers;

use App\Http\Services\CategoryServices;
use App\Http\Services\SliderServices;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $slider;
    protected $category;

    public function __construct(SliderServices $slider, CategoryServices $category)
    {
        $this->slider = $slider;
        $this->category = $category;
    }

    public function index()
    {
        $sliders = $this->slider->get();

        $categories = $this->category->getAll();

        return view('home',
            [
                'sliders' => $sliders,
                'categories' => $categories,
            ]
        );
    }

    public function about()
    {
        $categories = $this->category->getAll();

        return view('about',
            [
                'categories' => $categories,
            ]
        );
    }

    public function contact()
    {
        $categories = $this->category->getAll();

        return view('contact',
            [
                'categories' => $categories,
            ]
        );
    }
}

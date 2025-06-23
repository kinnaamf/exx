<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $items = Item::all();

        $sliderImages = [
            asset('images/slider/slider1.png'),
            asset('images/slider/slider2.png'),
            asset('images/slider/slider3.png'),
            asset('images/slider/slider4.png'),
            asset('images/slider/slider5.png'),
        ];

        return view('welcome', compact('items', 'sliderImages'));
    }
}

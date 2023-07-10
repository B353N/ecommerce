<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Controller;
use App\Models\HomeOffers;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        // Invoking that static method
        $sliders = Slider::where('status', 1)->orderBy('serial', 'asc')->get();
        $homeOffers = HomeOffers::latest()->take(3)->get();
        $productArea = Product::where('is_top', 1)->orderBy('updated_at', 'asc')->get();

        return view('frontend.home.home', compact('sliders', 'homeOffers', 'productArea'));
    }
}

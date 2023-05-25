<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
    $slider = Slider::where('status', 1)->orderBy('serial', 'asc')->get();
        return view('frontend.home.home');
    }
}

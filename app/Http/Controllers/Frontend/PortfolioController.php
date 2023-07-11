<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
   public function index()
   {
        $brands = Brand::all();
        return view('frontend.pages.portfolio', compact('brands'));
   }
}
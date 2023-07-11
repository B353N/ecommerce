<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;
use View;

class ContactsController extends Controller
{
    public function index()
    {
        $brands = Brand::all();
        return view('frontend.pages.contacts', compact('brands'));
    }
}
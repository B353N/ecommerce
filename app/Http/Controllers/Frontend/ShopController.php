<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $brands = Brand::all();

        return view('frontend.pages.shop', compact('products', 'brands'));
    }

    public function byCat(string $slug)
    {
        $category = Category::where('slug', $slug)->first();
        $products = Product::where('category_id', $category->id)->get();
        $brands = Brand::all();

        return view('frontend.pages.shop', compact('products', 'brands'));
    }

    public function bySubCat(string $slug)
    {
        $category = SubCategory::where('slug', $slug)->first();

        $products = Product::where('sub_category_id', $category->id)->get();
        $brands = Brand::all();

        return view('frontend.pages.shop', compact('products', 'brands'));
    }
}
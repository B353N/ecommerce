<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductImageGallery;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showProduct(string $slug)
    {
        $product = Product::where('slug', $slug)->first();
        $images = ProductImageGallery::where('product_id', $product->id)->get();
        //dd($images);
        return view('frontend.pages.product-detail', compact('product', 'images'));
    }
}
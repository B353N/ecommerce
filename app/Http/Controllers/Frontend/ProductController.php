<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Product;
use App\Models\ProductImageGallery;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showProduct(string $slug)
    {
        $product = Product::where('slug', $slug)->first();
        $images = ProductImageGallery::where('product_id', $product->id)->get();
        $brands = Brand::all();

        if($product->sub_category_id != NULL){
            $upSale = Product::where('sub_category_id', $product->sub_category_id)->get();
        }else{
            $upSale = Product::where('category_id', $product->category_id)->get();
        }


        //dd($images);
        return view('frontend.pages.product-detail', compact('product', 'images', 'upSale', 'brands'));
    }
}
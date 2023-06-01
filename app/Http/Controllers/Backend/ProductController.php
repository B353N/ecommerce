<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\ProductDataTable;
use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use App\Traids\imageUploadTrait;
use Illuminate\Http\Request;
use Str;

class ProductController extends Controller
{
    use imageUploadTrait;
    /**
     * Display a listing of the resource.
     */
    public function index(ProductDataTable $dataTable)
    {
        return $dataTable->render('admin.product.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $brands = Brand::all();
        return view('admin.product.create', compact('categories', 'brands'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => ['max:3000', 'image', 'required'],
            'name' => ['required', 'max:200'],
            'category' => ['required'],
            'brand' => ['required'],
            'price' => ['required'],
            'qty' => ['required'],
            'short_description' => ['required', 'max: 600'],
            'long_description' => ['required'],
        ]);

        /** Handle image Upload */

        $imagePath = $this->uploadImage($request, 'image', 'uploads');

        $product = new Product();
        if (isset($request->is_top)) {$is_top = '1';} else { $is_top = '0';};
        if (isset($request->is_best)) {$is_best = '1';} else { $is_best = '0';};
        if (isset($request->is_feature)) {$is_feature = '1';} else { $is_feature = '0';};
        $product->thumb_image = $imagePath;
        $product->name = $request->name;
        $product->slug = Str::slug($request->name);
        $product->category_id = $request->category;
        $product->sub_category_id = $request->subCategory;
        $product->brand_id = $request->brand;
        $product->qty = $request->qty;
        $product->short_description = $request->short_description;
        $product->long_description = $request->long_description;
        $product->video = $product->video_link;
        $product->sku = $request->sku;
        $product->price = $request->price;
        $product->offer_price = $request->offer_price;
        $product->offer_start = $request->offer_start_date;
        $product->offer_end = $request->offer_end_date;
        $product->is_top = $is_top;
        $product->is_best = $is_best;
        $product->is_feature = $is_feature;
        $product->status = $request->status;
        $product->seo_title = $request->seo_title;
        $product->seo_description = $request->seo_description;
        $product->save();

        toastr('Your Product is saved successfull!', 'success');

        return redirect()->route('admin.product.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    /**
     * Get Sub Categories For Category
     */

    public function getSubCategories(Request $request)
    {
        $subCategories = SubCategory::where('category_id', $request->id)->get();
        return $subCategories;
    }
}
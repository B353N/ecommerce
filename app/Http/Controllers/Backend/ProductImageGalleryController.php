<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\ProductImageGalleryDataTable;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductImageGallery;
use App\Traids\imageUploadTrait;
use Illuminate\Http\Request;

class ProductImageGalleryController extends Controller
{
    use imageUploadTrait;
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, ProductImageGalleryDataTable $datatable)
    {
        $product = Product::findOrFail($request->product);
        return $datatable->render('admin.product.image-gallery.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        dd($request);
        // $request->validate([
        //     'image.*' => ['required', 'image', 'max:3000']
        // ]);

        // /** Handle Image Uploads */
        // $imagePaths = $this->uploadMultiImage($request, 'image', 'uploads');

        // foreach($imagePaths as $path){
        //     $productImageGallery = new ProductImageGallery();
        //     $productImageGallery->image = $path;
        //     $productImageGallery->product_id = $request->product;
        //     $productImageGallery->save();
        // }
        // toastr('Images for product upload successful!', 'success');

        // return redirect()->back();
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
}
<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\BrandDataTable;
use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Traids\imageUploadTrait;
use DataTables;
use Illuminate\Http\Request;
use Str;

class BrandController extends Controller
{
    use imageUploadTrait;
    /**
     * Display a listing of the resource.
     */
    public function index(BrandDataTable $dataTable)
    {
        return $dataTable->render('admin.brand.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.brand.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'logo' => ['image', 'required', 'max:2000'],
            'name' => ['required', 'max:200'],
            'feature' => ['required'],
            'status' => ['required']
        ]);

        $logoPath = $this->uploadImage($request, 'logo', 'uploads');

        $brand = new Brand();

        $brand->logo = $logoPath;
        $brand->name = $request->name;
        $brand->slug = Str::slug($request->name);
        $brand->feature = $request->feature;
        $brand->status = $request->status;
        $brand->save();


        toastr('Your brand is created successfull!', 'success');
        return redirect()->route('admin.brand.index');

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
        $brand = Brand::findOrFail($id);

        return view('admin.brand.edit', compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'logo' => ['nullable','image', 'max:2000'],
            'name' => ['required', 'max:200'],
            'feature' => ['required'],
            'status' => ['required']
        ]);

        $brand = Brand::findOrFail($id);

        /** Handle file upload */
        $imagePath = $this->updateImage($request, 'logo', 'uploads', $brand->logo);
        /** @var logo $slider image */
        $brand->logo = empty(!$imagePath) ? $imagePath : $brand->logo;
        $brand->name = $request->name;
        $brand->slug = Str::slug($request->name);
        $brand->feature = $request->feature;
        $brand->status = $request->status;
        $brand->save();

        toastr('Your brand is updated successfull!', 'success');
        return redirect()->route('admin.brand.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $brand = Brand::findOrFail($id);
        $this->deleteImage($brand->logo);
        $brand->delete();

        return response(['status' => 'success', 'message' => 'Deleted Successfull!']);
    }

    public function changeStatus(Request $request)
    {
        $brand = Brand::findOrFail($request->id);

        $brand->status = $request->isChecked == 'true' ? 1 : 0;
        $brand->save();

        return response(['message' => 'Status has been updated']);
    }

    public function changeFeature(Request $request)
    {
        $brand = Brand::findOrFail($request->id);

        $brand->feature = $request->isChecked == 'true' ? 1 : 0;
        $brand->save();

        return response(['message' => 'Status has been updated']);
    }
}

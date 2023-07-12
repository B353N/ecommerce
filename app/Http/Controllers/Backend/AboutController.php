<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\AboutDataTable;
use App\Http\Controllers\Controller;
use App\Traids\imageUploadTrait;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    use imageUploadTrait;
    /**
     * Display a listing of the resource.
     */
    public function index(AboutDataTable $dataTable)
    {
        //dd($dataTable);
        return $dataTable->render('admin.about.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //dd('test');
        return view('admin.about.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => ['image', 'max:2000'],
            'content' => ['required'],
        ]);

        $imagePath = $this->uploadImage($request, 'image', 'uploads');

        $brand = new About();

        $brand->image = $imagePath;
        $brand->content = $request->content;
        $brand->save();


        toastr('Your brand is created successfull!', 'success');
        return redirect()->route('admin.about.index');
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
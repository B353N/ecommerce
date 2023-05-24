<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Traids\ImageUploadTrait;

class SliderController extends Controller
{
    use ImageUploadTrait;
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('admin.slider.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {

        $request->validate([
            'image' => ['required', 'image', 'max: 2000'],
            'h4' => ['string', 'max: 200'],
            'h2' => ['string', 'max: 200'],
            'h1' => ['string', 'max: 100'],
            'btn_url' => ['required', 'url'],
            'serial' => ['required', 'integer'],
            'status' => ['required']
        ]);

        $slider = new Slider();

        /** Handle file upload */
        $imagePath = $this->uploadImage($request, 'image', 'uploads');
        /** @var image $slider image */
        $slider->image = $imagePath;
        /** @var h4 $slider small text in slider */
        $slider->h4 = $request->h4;
        /** @var h2 $slider middle text in slider */
        $slider->h2 = $request->h2;
        /** @var h1 $slider big text in slider get from $request h1 */
        $slider->h1 = $request->h1;
        /** @var btn_url $slider url */
        $slider->btn_url = $request->btn_url;
        /** @var serial $slider order number */
        $slider->serial = $request->serial;
        /** @var status $slider status boolean */
        $slider->status = $request->status;
        $slider->save();

        toastr('Your Slider Is Created!', 'success');
        return redirect()->back();
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

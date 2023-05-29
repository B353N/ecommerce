<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\HomeOffersDataTable;
use App\Http\Controllers\Controller;
use App\Models\HomeOffers;
use Illuminate\Http\Request;

class HomeOffersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(HomeOffersDataTable $dataTable)
    {
        return $dataTable->render('admin.homeOffers.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.homeOffers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'max:200'],
            'text' => ['required']
        ]);

        $homeOffer = new HomeOffers();

        $homeOffer->title = $request->title;
        $homeOffer->text = $request->text;
        $homeOffer->save();

        toastr('Your Home Offer Is Created!', 'success');
        return redirect()->route('admin.homeOffers.index');
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
        $homeOffer = HomeOffers::findOrFail($id);
        return view('admin.homeOffers.edit', compact('homeOffer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => ['required', 'max:200'],
            'text' => ['required']
        ]);

        $homeOffer = HomeOffers::findOrFail($id);

        $homeOffer->title = $request->title;
        $homeOffer->text = $request->text;
        $homeOffer->save();

        toastr('Your Home Offer Is Updated!', 'success');
        return redirect()->route('admin.homeOffers.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $homeOffer = HomeOffers::findOrFail($id);
        $homeOffer->delete();

        return response(['status' => 'success', 'message' => 'Offer Deleted Successfully']);
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
        $this->authorizeResource(Listing::class, 'listing');
    }
    public function index()
    {
        return inertia(
            'Listing/Index',
            [
                'listings' => Listing::latest()->paginate(10)
            ]
        );
    }
    public function create()
    {
        return inertia('Listing/Create');
    }
    public function store(Request $request)
    {

        $request->user()->listing()->create(
            $request->validate([
                'beds' => 'required|integer|min:0|max:20',
                'baths' => 'required|integer|min:0|max:20',
                'area' => 'required|integer|min:0|max:1500',
                'city' => 'required|string',
                'code' => 'required|integer',
                'street' => 'required|string',
                'street_number' => 'required|min:1|max:1000',
                'price' => 'required|integer|min:1|max:20000000',
            ])
        );

        return redirect()->route('listing.index')->with('success', 'Listing was created.');
    }
    public function show(Listing $listing)
    {
        return inertia(
            'Listing/Show',
            [
                'listing' => $listing
            ]
        );
    }
    public function edit(Listing $listing)
    {
        return inertia(
            'Listing/Edit',
            [
                'listing' => $listing
            ]
        );
    }
    public function update(Request $request, Listing $listing)
    {
        $listing->update(
            $request->validate([
                'beds' => 'required|integer|min:0|max:20',
                'baths' => 'required|integer|min:0|max:20',
                'area' => 'required|integer|min:0|max:1500',
                'city' => 'required|string',
                'code' => 'required|integer',
                'street' => 'required|string',
                'street_number' => 'required|min:1|max:1000',
                'price' => 'required|integer|min:1|max:20000000',
            ])
        );

        return redirect()->route('listing.index')->with('success', 'Listing was updated.');
    }
    public function destroy(Listing $listing)
    {
        $listing->delete();
        return redirect()->route('listing.index')->with('success', 'Listing was deleted.');
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function index()
    {
        return view('listings.index', [
            'listings' => Listing::all()
        ]);
    }

    public function show(Listing $listing)
    {
        return view('listings.show', [
            'listing' => $listing
        ]);
    }

    public function create()
    {
        
    }

    public function store(Request $request)
    {
        //
    }

    public function edit(Listing $listing)
    {
        //
    }


    public function update(Request $request, Listing $listing)
    {
        //
    }

 
    public function destroy(Listing $listing)
    {

    }
}

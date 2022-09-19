<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function index()
    {
        return view('listings.index', [
            //gets all listings and sorts according to latest. used instead of all() function
            'listings' => Listing::latest()
            ->filter(request(['tag', 'search']))
            ->paginate(2)
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
        return view('listings.create');
    }

    public function store(Request $request)
    {
        $inputFields = $request->validate([
            'title' => 'required',
            'company' => 'required',
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required'
            
        ]);

        if($request->hasFile('logo'))
        {
            $inputFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        Listing::create($inputFields);

        return redirect('/')->with('message', 'Listing created successfully');
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

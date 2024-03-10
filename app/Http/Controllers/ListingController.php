<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use App\Models\ResidentialType;

class ListingController extends Controller
{
    public function index(Request $request){
        $listing_filter = Listing::latest()->filter(request(['search']))->get();


        return view("listings.index", [
            'listings' => $listing_filter,
            'residential_types' => ResidentialType::all(),
            'recommendations' => [
                'Studio Properties for rent in Abu Dhabi',
                '1 Bedroom Properties for rent in Abu Dhabi',
                '2 Bedroom Properties for rent in Abu Dhabi',
                '3 Bedroom Properties for rent in Abu Dhabi',
                '4 Bedroom Properties for rent in Abu Dhabi',
                'Apartments for rent in Abu Dhabi',
                'Villas for rent in Abu Dhabi',
            ],
            'recommendations_2' => [
                'Al Ain Properties',
                'Dubai Properties',
                'Ajman Properties',
                'Sharjah Properties',
                'Umm Al Quwain Properties',
                'Ras Al Khaimah Properties',
                'Fujairah Properties',
            ],
        ]);
    }

    public function show(Listing $listing){
        return view("listings.show", ['listing' => $listing]);
    }
}

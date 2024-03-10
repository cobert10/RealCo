<?php

use App\Models\Listing;
use App\Models\ResidentialType;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/listings', [ListingController::class, 'index']);

Route::get('/listings/{listing}', [ListingController::class, 'show']);

// Route::get('listings/min={min}&max={max}')

// Route::get('/listings/{id}', function ($id) {
//     return view('listing', [
//         'listing'=> Listing::find($id)
//     ]);
// });

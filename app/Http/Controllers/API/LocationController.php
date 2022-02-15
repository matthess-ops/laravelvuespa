<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    // all books
    public function index()
    {
        error_log("LOCATION TEST");
        // $locations = Location::all()->toArray();
        // return array_reverse($locations);
        return Location::all();
    }


}

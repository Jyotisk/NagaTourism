<?php

namespace App\Http\Controllers\Destination;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PublicDestinationController extends Controller
{
    public function destination()
    {
        return view("public_destination.destination_land");
    }

    public function destination_details()
    {
        return view("public_destination.destination_details");
    }
}

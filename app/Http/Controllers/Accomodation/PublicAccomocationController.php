<?php

namespace App\Http\Controllers\Accomodation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PublicAccomocationController extends Controller
{
    public function Hotels()
    {
        return view('public_accomodation.hotels');
    }
}

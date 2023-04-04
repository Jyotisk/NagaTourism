<?php

namespace App\Http\Controllers\Accomodation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Hotel\HotelDetail;
use App\Models\Homestay\HomestayDetail;
use App\Models\TravelOperator\TravelOperatorDetail;
class PublicAccomocationController extends Controller
{
    public function Hotels()
    {
        return view('public_accomodation.hotels');
    }
    public function Hotellists()
    {
        $hotel_list = HotelDetail::where('status', 1)->get();
        return datatables()->of($hotel_list)
            ->addIndexColumn()
            ->make(true);
    }
    public function Homestay()
    {
        return view('public_accomodation.homestay');
    }
    public function HomestayLists()
    {
        $homestay_list = HomestayDetail::where('status', 1)->get();
        return datatables()->of($homestay_list)
            ->addIndexColumn()
            ->make(true);
    }
    public function TravelOperators()
    {
        return view('public_accomodation.travel_operator');
    }
    public function TravelOperatorLists()
    {
        $to_list = TravelOperatorDetail::where('status', 1)->get();
        return datatables()->of($to_list)
            ->addIndexColumn()
            ->make(true);
    }
}

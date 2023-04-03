<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Hotel\HotelDetail;
use App\Models\Homestay\HomestayDetail;
use App\Models\VisitorCountDetail;
use App\Models\Destination\DestinationDetail;
use App\Models\TravelOperator\TravelOperatorDetail;
use App\Models\RegisteredGuide\RegisteredGuideDetail;
use Illuminate\Support\Carbon;
use App\Models\DesignatedOfficial\DesignatedOfficialDetail;

class AdminController extends Controller
{
public function Dashboard(){
    $visitors_count=VisitorCountDetail::count();
    $today_visitors_count=VisitorCountDetail::whereDate('created_at', Carbon::today())->count();
    $hotel_count=HotelDetail::where('status',1)->count();
    $homestay_count=HomestayDetail::where('status',1)->count();
    $destination_count=DestinationDetail::where('status',1)->count();
    $travel_operator_count=TravelOperatorDetail::where('status',1)->count();
    $guide_count=RegisteredGuideDetail::where('status',1)->count();
    $official_count=DesignatedOfficialDetail::where('status',1)->count();
    return view('dashboard',compact('visitors_count','today_visitors_count','hotel_count','homestay_count','destination_count','travel_operator_count','guide_count','official_count'));
}
}

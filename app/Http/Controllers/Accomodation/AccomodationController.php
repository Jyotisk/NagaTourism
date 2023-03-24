<?php

namespace App\Http\Controllers\Accomodation;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use App\Models\Hotel\HotelDetail;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class AccomodationController extends Controller
{
    public function GetAddHotel()
    {
        try {
            return view('accomodation.add_hotel');
        } catch (Exception $e) {
        }
    }
    public function AddHotel(Request $request)
    {
        try {

            $details = [];
            for ($i = 0; $i < count($request->hotel_name); $i++) {
                $details[] = [
                    'hotel_name' => $request->hotel_name[$i],
                    'location' => $request->location[$i],
                    'contact_no' => $request->contact_number[$i],
                    'email' => $request->email[$i],
                    'user_id' => Auth::user()->id,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),

                ];
            }
            $details = collect($details);
            $chunks = $details->chunk(500);
            
            foreach ($chunks as $chunk) {
                HotelDetail::insert($chunk->toArray());
            }
            return response()->json([
                'messege' => 'success',
                'request' =>'Hotel details successfully Inserted',
            ]);
        } catch (Exception $e) {
            return response()->json([
                'messege' => 'error',
                'request' =>'Something Went Wrong',
            ]);        }
    }
    public function HotelList(){
        return view('accomodation.hotel_details');

    }
}

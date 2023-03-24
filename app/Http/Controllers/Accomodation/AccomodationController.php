<?php

namespace App\Http\Controllers\Accomodation;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use App\Models\Hotel\HotelDetail;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\User;


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
            if ($request->ajax()) {

                $validator=Validator::make($request->all(), [
                    'name' => 'required|string|max:255',
                    'user_type' => 'required',
                    'centre_code' => 'required',
                    'email' => 'required|string|email|max:255|unique:users',
        
        
                ]);
                if ($validator->fails()) {
        
                    return response()->json([
                        'msg' => 'validationFails',
                        'error' => $validator->errors()
                    ]);
                }else{
                }
            }

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
        // $user_type = User::join('user_types','users.user_type_id','=','user_types.id')->
        // join('centre_codes','centre_codes.id','=','users.centre_code')->
        // select('users.name','user_types.user_type','centre_codes.centre_name','users.status')->
        // whereNotIn('users.user_type_id', [1])->get();
        // return datatables()->of($user_type)
        //     ->addIndexColumn()
        //   ->make(true);
        return view('accomodation.hotel_details');

    }
}

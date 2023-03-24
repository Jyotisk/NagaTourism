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
                    'hotel_name' => 'required|string|max:255',
                    'location' => 'required',
                    'contact_no' => 'required|unique:hotel_details',
                    'email' => 'required|string|email|max:255|unique:hotel_details',        
                ]);
                if ($validator->fails()) {
        
                    return response()->json([
                        'msg' => 'validationFails',
                        'error' => $validator->errors()
                    ]);
                }else{
                    $details = [];
                    for ($i = 0; $i < count($request->hotel_name); $i++) {
                        $details[] = [
                            'hotel_name' => $request->hotel_name[$i],
                            'location' => $request->location[$i],
                            'contact_no' => $request->contact_number[$i],
                            'email' => $request->email[$i],
                            'status' => 1,
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
                }
            }

     
        } catch (Exception $e) {
            return response()->json([
                'messege' => 'error',
                'request' =>'Something Went Wrong',
            ]);        }
    }
    public function HotelList(){
        return view('accomodation.hotel_details');
    }
    public function DatatableHotelList(){
     $hotel_list = HotelDetail::where('status',1)->get();
        return datatables()->of($hotel_list)
            ->addIndexColumn()
          ->make(true);
    }
    public function GetEditHotelData(Request $request){
        return  response()->json([
            'message'=>'success',
            'data'=> HotelDetail::where('id',$request->id)->first()
        ]);
    }
    public function DeleteHotelData(Request $request){
        $data=HotelDetail::where('id',$request->id)->first();
        $data->status=0;
        $data->save();
        return  response()->json([
            'message'=>'success',
            'data'=> 'deleted successfully'
        ]);
    }
    public function EditHotelData(Request $request){
        $data=HotelDetail::where('id',$request->hotel_id)->first();
        $data->hotel_name=$request->hotel_name;
        $data->location=$request->location;
        $data->contact_no=$request->contact_no;
        $data->email=$request->email;
        $data->save();
        return  response()->json([
            'message'=>'success',
            'data'=> 'updated successfully'
        ]);
    }
}

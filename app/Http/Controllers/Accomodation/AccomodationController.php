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
use App\Models\Homestay\HomestayDetail;
use App\Models\TravelOperator\TravelOperatorDetail;
use App\Models\RegisteredGuide\RegisteredGuideDetail;

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
                for ($i = 0; $i < count($request->hotel_name); $i++) {
                    $validator = Validator::make(
                        $request->all(),
                        [
                            'hotel_name.*' => 'required|string|max:255',
                            'location.*' => 'required',
                            'contact_no.*' => 'required|unique:hotel_details',
                            'email.*' => 'required|email|max:255',
                        ],
                        [
                            'hotel_name.*.required' => 'You must provide a hotel name',
                            'location.*.required' => 'You must provide a location',
                            'contact_no.*.required' => 'You must provide a contact no',
                            'email.*.required' => 'You must provide a wmail',

                        ]
                    );
                }
                if ($validator->fails()) {

                    return response()->json([
                        'messege' => 'validationFails',
                        'error' => $validator->errors()
                    ]);
                } else {
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
                        'request' => 'Hotel details successfully Inserted',
                    ]);
                }
            }
        } catch (Exception $e) {
            return $e;
            return response()->json([
                'messege' => 'error',
                'request' => 'Something Went Wrong',
            ]);
        }
    }
    public function HotelList()
    {
        return view('accomodation.hotel_details');
    }
    public function DatatableHotelList()
    {
        $hotel_list = HotelDetail::where('status', 1)->get();
        return datatables()->of($hotel_list)
            ->addIndexColumn()
            ->make(true);
    }
    public function GetEditHotelData(Request $request)
    {
        return  response()->json([
            'message' => 'success',
            'data' => HotelDetail::where('id', $request->id)->first()
        ]);
    }
    public function DeleteHotelData(Request $request)
    {
        $data = HotelDetail::where('id', $request->id)->first();
        $data->status = 0;
        $data->save();
        return  response()->json([
            'message' => 'success',
            'data' => 'deleted successfully'
        ]);
    }
    public function EditHotelData(Request $request)
    {
        $data = HotelDetail::where('id', $request->hotel_id)->first();
        $data->hotel_name = $request->hotel_name;
        $data->location = $request->location;
        $data->contact_no = $request->contact_no;
        $data->email = $request->email;
        $data->save();
        return  response()->json([
            'message' => 'success',
            'data' => 'updated successfully'
        ]);
    }
    public function GetAddhomestay()
    {
        return view('accomodation.add_homestay');
    }
    public function AddHomestay(Request $request)
    {
        try {
            if ($request->ajax()) {
                $validator = Validator::make(
                    $request->all(),
                    [
                        'homestay_name.*' => 'required|string|max:255',
                        'location.*' => 'required',
                        // 'contact_no.*' => 'required|digits:10|unique:homestay_details',
                        'contact_no.*' => 'required|digits:10',
                        'email.*' => 'email|max:255|nullable',
                        'alt_email.*' => 'email|max:255|nullable',
                        'alt_contact_no.*' => 'digits:10|nullable',

                    ],
                    [
                        'homestay_name.*.required' => 'You must provide a hotel name',
                        'location.*.required' => 'You must provide a location',
                        'contact_no.*.required' => 'You must provide a contact no',
                        // 'email.*.email' => 'You must provide a email',

                    ]
                );

                if ($validator->fails()) {
                    return response()->json([
                        'messege' => 'validationFails',
                        'error' => $validator->errors()
                    ]);
                } else {
                    $details = [];
                    for ($i = 0; $i < count($request->homestay_name); $i++) {
                        $details[] = [
                            'homestay_name' => $request->homestay_name[$i],
                            'location' => $request->location[$i],
                            'contact_no' => $request->contact_no[$i],
                            'alt_contact_no' => $request->alt_contact_no[$i],
                            'email' => $request->email[$i],
                            'alt_email' => $request->alt_email[$i],
                            'status' => 1,
                            'user_id' => Auth::user()->id,
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),

                        ];
                    }
                    $details = collect($details);
                    $chunks = $details->chunk(500);

                    foreach ($chunks as $chunk) {
                        HomestayDetail::insert($chunk->toArray());
                    }
                    return response()->json([
                        'messege' => 'success',
                        'request' => 'Homestay Data successfully Inserted',
                    ]);
                }
            }
        } catch (Exception $e) {
            return response()->json([
                'messege' => 'error',
                'request' => 'Something Went Wrong',
            ]);
        }
    }
    public function HomestayList()
    {
        return view('accomodation.homestay_details');
    }
    public function DatatableHomestayList()
    {
        $homestay_list = HomestayDetail::where('status', 1)->get();
        return datatables()->of($homestay_list)
            ->addIndexColumn()
            ->make(true);
    }
    public function GetEditHomestayData(Request $request)
    {
        return  response()->json([
            'message' => 'success',
            'data' => HomestayDetail::where('id', $request->id)->first()
        ]);
    }
    public function DeleteHomestayData(Request $request)
    {
        $data = HomestayDetail::where('id', $request->id)->first();
        $data->status = 0;
        $data->save();
        return  response()->json([
            'message' => 'success',
            'data' => 'deleted successfully'
        ]);
    }
    public function EditHomestayData(Request $request)
    {
        try {
            if ($request->ajax()) {
                $validator = Validator::make(
                    $request->all(),
                    [
                        'homestay_name' => 'required|string|max:255',
                        'location' => 'required',
                        // 'contact_no' => 'required|digits:10|unique:homestay_details',
                        'contact_no' => 'required|digits:10',
                        'email' => 'email|max:255|nullable',
                        'alt_email' => 'email|max:255|nullable',
                        'alt_contact_no' => 'digits:10|nullable',

                    ],
                    [
                        'homestay_name.required' => 'You must provide a hotel name',
                        'location.required' => 'You must provide a location',
                        'contact_no.required' => 'You must provide a contact no',
                        // 'email.*.email' => 'You must provide a email',
                    ]
                );

                if ($validator->fails()) {
                    return response()->json([
                        'message' => 'validationFails',
                        'error' => $validator->errors()
                    ]);
                } else {
                    $data = HomestayDetail::where('id', $request->homestay_id)->first();
                    $data->homestay_name = $request->homestay_name;
                    $data->location = $request->location;
                    $data->alt_contact_no = $request->alt_contact_no;
                    $data->contact_no = $request->contact_no;
                    $data->email = $request->email;
                    $data->alt_email = $request->alt_email;
                    $data->save();
                    return  response()->json([
                        'message' => 'success',
                        'data' => 'updated successfully'
                    ]);
                }
            }
        } catch (Exception $e) {
            return response()->json([
                'messege' => 'error',
                'request' => 'Something Went Wrong',
            ]);
        }
    }

    public function GetAddTravelOperator()
    {
        return view('accomodation.add_travel_operator');
    }
    public function AddTravelOperator(Request $request)
    {
        try {
            if ($request->ajax()) {
                // $validator = Validator::make($request->all(), [
                //     'homestay_name.*' => 'required|string|max:255',
                //     'location.*' => 'required',
                //     'contact_no.*' => 'required|unique:homestay_data',
                //     'email.*' => 'required|email|max:255',
                // ],
                // [
                //     'homestay_name.*.required' => 'You must provide a hotel name',
                //     'location.*.required' => 'You must provide a location',
                //     'contact_no.*.required' => 'You must provide a contact no',
                //     'email.*.required' => 'You must provide a wmail',

                // ]);
                // if ($validator->fails()) {

                //     return response()->json([
                //         'messege' => 'validationFails',
                //         'error' => $validator->errors()
                //     ]);
                // } else {
                $details = [];
                for ($i = 0; $i < count($request->name); $i++) {
                    $details[] = [
                        'name' => $request->name[$i],
                        'address' => $request->address[$i],
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
                    TravelOperatorDetail::insert($chunk->toArray());
                }
                return response()->json([
                    'messege' => 'success',
                    'request' => 'Hotel details successfully Inserted',
                ]);
                // }
            }
        } catch (Exception $e) {
            return $e;
            return response()->json([
                'messege' => 'error',
                'request' => 'Something Went Wrong',
            ]);
        }
    }
    public function TravelOperatorList()
    {
        return view('accomodation.travel_operator_details');
    }
    public function DatatableTravelOperatorList()
    {
        $to_list = TravelOperatorDetail::where('status', 1)->get();
        return datatables()->of($to_list)
            ->addIndexColumn()
            ->make(true);
    }
    public function GetEditTravelOperatorData(Request $request)
    {
        return  response()->json([
            'message' => 'success',
            'data' => TravelOperatorDetail::where('id', $request->id)->first()
        ]);
    }
    public function DeleteTravelOperatorData(Request $request)
    {
        $data = TravelOperatorDetail::where('id', $request->id)->first();
        $data->status = 0;
        $data->save();
        return  response()->json([
            'message' => 'success',
            'data' => 'deleted successfully'
        ]);
    }
    public function EditTravelOperatorData(Request $request)
    {
        $data = TravelOperatorDetail::where('id', $request->id)->first();
        $data->name = $request->name;
        $data->address = $request->address;
        $data->contact_no = $request->contact_no;
        $data->email = $request->email;
        $data->save();
        return  response()->json([
            'message' => 'success',
            'data' => 'updated successfully'
        ]);
    }


    public function GetAddRegisteredGuide()
    {
        return view('accomodation.add_registered_guide');
    }
    public function AddRegisteredGuide(Request $request)
    {
        try {
            if ($request->ajax()) {
                // $validator = Validator::make($request->all(), [
                //     'homestay_name.*' => 'required|string|max:255',
                //     'location.*' => 'required',
                //     'contact_no.*' => 'required|unique:homestay_data',
                //     'email.*' => 'required|email|max:255',
                // ],
                // [
                //     'homestay_name.*.required' => 'You must provide a hotel name',
                //     'location.*.required' => 'You must provide a location',
                //     'contact_no.*.required' => 'You must provide a contact no',
                //     'email.*.required' => 'You must provide a wmail',

                // ]);
                // if ($validator->fails()) {

                //     return response()->json([
                //         'messege' => 'validationFails',
                //         'error' => $validator->errors()
                //     ]);
                // } else {
                $details = [];
                for ($i = 0; $i < count($request->name); $i++) {
                    $details[] = [
                        'name' => $request->name[$i],
                        'address' => $request->address[$i],
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
                    RegisteredGuideDetail::insert($chunk->toArray());
                }
                return response()->json([
                    'messege' => 'success',
                    'request' => 'Hotel details successfully Inserted',
                ]);
                // }
            }
        } catch (Exception $e) {
            return $e;
            return response()->json([
                'messege' => 'error',
                'request' => 'Something Went Wrong',
            ]);
        }
    }
    public function RegisteredGuideList()
    {
        return view('accomodation.registered_guide_details');
    }
    public function DatatableRegisteredGuideList()
    {
        $to_list = RegisteredGuideDetail::where('status', 1)->get();
        return datatables()->of($to_list)
            ->addIndexColumn()
            ->make(true);
    }
    public function GetEditRegisteredGuideData(Request $request)
    {
        return  response()->json([
            'message' => 'success',
            'data' => RegisteredGuideDetail::where('id', $request->id)->first()
        ]);
    }
    public function DeleteRegisteredGuideData(Request $request)
    {
        $data = RegisteredGuideDetail::where('id', $request->id)->first();
        $data->status = 0;
        $data->save();
        return  response()->json([
            'message' => 'success',
            'data' => 'deleted successfully'
        ]);
    }
    public function EditRegisteredGuideData(Request $request)
    {
        $data = RegisteredGuideDetail::where('id', $request->id)->first();
        $data->name = $request->name;
        $data->address = $request->address;
        $data->contact_no = $request->contact_no;
        $data->email = $request->email;
        $data->save();
        return  response()->json([
            'message' => 'success',
            'data' => 'updated successfully'
        ]);
    }
}

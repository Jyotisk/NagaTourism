<?php

namespace App\Http\Controllers\Destination;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Exception;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\Destination\DestinationDetail;;;

class DestinationController extends Controller
{
    public function GetAddDestination(){
        return view('destination.add_destination');
    }
    public function AddDestination(Request $request){
        return $request;
        try {
            if ($request->ajax()) {
                $validator = Validator::make($request->all(), [
                    'official_type' => 'required',
                    'name.*' => 'required|string|max:255',
                    'address.*' => 'required',
                    'contact_no.*' => 'required|digits:10',
                    'email.*' => 'email|max:255|nullable',
                    'alt_email.*' => 'email|max:255|nullable',
                    'alt_contact_no.*' => 'digits:10|nullable',
                ],
                [
                    'name.*.required' => 'You must provide a hotel name',
                    'address.*.required' => 'You must provide a address',
                    'contact_no.*.required' => 'You must provide a contact no',
                    'email.*.required' => 'You must provide a wmail',

                ]);
                if ($validator->fails()) {

                    return response()->json([
                        'message' => 'validationFails',
                        'error' => $validator->errors()
                    ]);
                } else {
                    $details = [];
                    for ($i = 0; $i < count($request->name); $i++) {
                        $details[] = [
                            'name' => $request->name[$i],
                            'address' => $request->address[$i],
                            'contact_no' => $request->contact_no[$i],
                            'email' => $request->email[$i],
                            'official_type'=>$request->official_type,
                            'alt_contact_no' => $request->alt_contact_no[$i],
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
                        DestinationDetail::insert($chunk->toArray());
                    }
                    return response()->json([
                        'message' => 'success',
                        'request' => 'Designated Official details successfully Inserted',
                    ]);
                }
            }
        } catch (Exception $e) {
            return $e;
            return response()->json([
                'message' => 'error',
                'request' => 'Something Went Wrong',
            ]);
        }
    }
    public function OfficialList()
    {
        return view('designated_official.designated_official_details');
    }
    public function DatatableOfficialList(Request $request)
    {
        $to_list = DestinationDetail::where(['status'=> 1,'official_type'=>$request->official_type])->get();
        return datatables()->of($to_list)
            ->addIndexColumn()
            ->make(true);
    }
    public function GetEditOfficialData(Request $request)
    {
        return  response()->json([
            'message' => 'success',
            'data' => DestinationDetail::where('id', $request->id)->first()
        ]);
    }
    public function DeleteOfficialData(Request $request)
    {
        $data = DestinationDetail::where('id', $request->id)->first();
        $data->status = 0;
        $data->save();
        return  response()->json([
            'message' => 'success',
            'data' => 'deleted successfully'
        ]);
    }
    public function EditOfficialData(Request $request)
    {

        try {
            if ($request->ajax()) {
                $validator = Validator::make(
                    $request->all(),
                    [
                        'name' => 'required|string|max:255',
                        'address' => 'required',
                        // 'contact_no' => 'required|digits:10|unique:homestay_details',
                        'contact_no' => 'required|digits:10',
                        'email' => 'email|max:255|nullable',
                        'alt_email' => 'email|max:255|nullable',
                        'alt_contact_no' => 'digits:10|nullable',

                    ],
                    [
                        'name.required' => 'You must provide a name',
                        'address.required' => 'You must provide a address',
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
                    $data = DestinationDetail::where('id', $request->id)->first();
                    $data->name = $request->name;
                    $data->address = $request->address;
                    $data->contact_no = $request->contact_no;
                    $data->alt_contact_no = $request->alt_contact_no;
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
                'message' => 'error',
                'request' => 'Something Went Wrong',
            ]);
        }

    }}

<?php

namespace App\Http\Controllers\Destination;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Exception;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\Destination\DestinationDetail;
use App\Models\Destination\MoreDestinationDetail;

;;

class DestinationController extends Controller
{
    public function GetAddDestination()
    {
        return view('destination.add_destination');
    }
    public function AddDestination(Request $request)
    {
        // return $request;
        try {
            if ($request->ajax()) {
                $validator = Validator::make(
                    $request->all(),
                    [
                        'header' => 'required',
                        // 'blog_date' => 'required|string|max:255',
                        'blog_by' => 'required',
                        'source_link' => 'nullable',
                        'description' => 'nullable',
                        'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
                        'more_image.*' => 'required_if:add_more_status,==,1|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
                        'more_image_by.*' => 'required_if:add_more_status,==,1',
                        'more_description.*' => 'required_if:add_more_status,==,1',

                    ],
                    [
                        'header.required' => 'You must provide a header',
                        'blog_by.required' => 'You must provide blog written by',
                        'image.required' => 'You must provide a image',
                    ]
                );
                if ($validator->fails()) {

                    return response()->json([
                        'message' => 'validationFails',
                        'error' => $validator->errors()
                    ]);
                } else {

                    $image_path = $request->file('image')->store('destination', 'public');
                    $DestinationDetail =new DestinationDetail();
                    $DestinationDetail->header=$request->header;
                    $DestinationDetail->blog_date=Carbon::parse($request->date)->format("Y-m-d");
                    $DestinationDetail->blog_by=$request->blog_by;
                    $DestinationDetail->source_link=$request->source_link;
                    $DestinationDetail->description=$request->description;
                    $DestinationDetail->image=$image_path;
                    $DestinationDetail->status=1;
                    $DestinationDetail->add_more_status=$request->add_more_status==1?1:0;
                    $DestinationDetail->save();

                    if($request->add_more_status==1){
                        $details = [];
                        for ($i = 0; $i < count($request->more_image); $i++)
                         {
                            $more_image_path = $request->file('more_image')[$i]->store('destination', 'public');
                            $details[] = [
                                'image' => $more_image_path,
                                'image_by' => $request->more_image_by[$i],
                                'description' => $request->more_description[$i],
                                'destination_detail_id' => $DestinationDetail->id,
                                'created_at' => Carbon::now(),
                                'updated_at' => Carbon::now(),
                            ];
                        }
                        $details = collect($details);
                        $chunks = $details->chunk(500);
    
                        foreach ($chunks as $chunk) {
                            MoreDestinationDetail::insert($chunk->toArray());
                        }
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
    public function DestinationList()
    {
        return view('destination.destination_lists');
    }
    public function DatatableOfficialList(Request $request)
    {
        $to_list = DestinationDetail::where(['status' => 1, 'official_type' => $request->official_type])->get();
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
    }
}
<?php

namespace App\Http\Controllers\Destination;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Exception;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\Destination\DestinationDetail;
use App\Models\Destination\MoreDestinationDetail;;;
use App\Models\BlogCategory;
class DestinationController extends Controller
{
    public function GetAddDestination()
    {
        $blogs=BlogCategory::get();
        return view('destination.add_destination',compact('blogs'));
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
                        'blog_date' => 'required',
                        // 'add_more_status' => 'required',
                        'blog_categories_id' => 'required',
                        'source_link' => 'nullable',
                        'description' => 'nullable',
                        'image' => 'required|image|mimes:jpg,png,jpeg|max:5120',
                        // 'more_image.*' => 'required_if:add_more_status,1',
                        // 'more_image.*' => 'image|mimes:jpg,png,jpeg|max:5120',
                        // 'more_image' => 'required_if:add_more_image.*,1',

                        'more_image.*'  => 'required_if:add_more_status,==,1|image|mimes:jpg,png,jpeg|max:5120',
                        // 'more_image_by.*' => 'required_if:add_more_status,==,1',
                        // 'more_description.*' => 'required_if:add_more_status,==,1',

                    ],
                    [
                        'header.required' => 'You must provide a header',
                        'blog_by.required' => 'You must provide blog written by',
                        'image.required' => 'You must provide a image',
                        'image.mimes' => 'Image must be of jpg or jpeg or png format',
                        'image.max' => 'Image should be less then 5mb',
                        'more_image.*.mimes' => 'Image must be of jpg or jpeg or png format',
                        'more_image.*.required_if' => 'You must provide a image',
                        'more_image.*.max' => 'Image should be less then 5mb',

                    ]
                );
                if ($validator->fails()) {

                    return response()->json([
                        'message' => 'validationFails',
                        'error' => $validator->errors()
                    ]);
                } else {

                    $image_path = $request->file('image')->store('destination', 'public');
                    $DestinationDetail = new DestinationDetail();
                    $DestinationDetail->header = $request->header;
                    $DestinationDetail->blog_date = Carbon::parse($request->date)->format("Y-m-d");
                    $DestinationDetail->blog_by = $request->blog_by;
                    $DestinationDetail->source_link = $request->source_link;
                    $DestinationDetail->description = $request->description;
                    $DestinationDetail->blog_categories_id = $request->blog_categories_id;
                    $DestinationDetail->image = $image_path;
                    $DestinationDetail->status = 1;
                    $DestinationDetail->add_more_status = $request->add_more_status == 1 ? 1 : 0;
                    $DestinationDetail->save();

                    if ($request->add_more_status == 1) {
                        $details = [];
                        for ($i = 0; $i < count($request->more_image); $i++) {
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
                        'request' => 'Designated Destinatio details successfully Inserted',
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
    public function DatatableDestinatioList(Request $request)
    {
        $to_list = DestinationDetail::leftjoin('blog_categories','destination_details.blog_categories_id','=','blog_categories.id')->
        where(['status' => 1])->select('destination_details.id','destination_details.header','destination_details.blog_by','destination_details.blog_date','blog_categories.category_name AS name')->get();
        return datatables()->of($to_list)
            ->addIndexColumn()
            ->make(true);
    }
    public function DeleteDestinationData(Request $request)
    {
        $data = DestinationDetail::where('id', $request->id)->first();
        $data->status = 0;
        $data->save();
        return  response()->json([
            'message' => 'success',
            'data' => 'deleted successfully'
        ]);
    }
    public function ViewDestinationData(Request $request)
    {
        try {
            if ($request->ajax()) {
                $DestinationDetail = DestinationDetail::where('id', $request->id)->first();
                $details = [];
                if ($DestinationDetail->add_more_status == 1) {
                    $details = DestinationDetail::leftjoin('more_destination_details','destination_details.id', '=', 'more_destination_details.destination_detail_id')
                    ->where('destination_details.id', $request->id)->get();
                } else {
                    $details = DestinationDetail::where('id', $request->id)->get();
                }
                return response()->json([
                    'message' => 'success',
                    'destinationdetail' => $DestinationDetail,
                    'details' => $details,

                ]);
            }
        } catch (Exception $e) {
            return $e;
            return response()->json([
                'message' => 'error',
                'request' => 'Something Went Wrong',
            ]);
        }
    }
    public function EditDestinationData(Request $request)
    {

        try {
            if ($request->ajax()) {
                $validator = Validator::make(
                    $request->all(),
                    [
                        'header' => 'required',
                        'source_link' => 'nullable',
                        'description' => 'nullable',
                        // 'image' => 'required|image|mimes:jpg,png,jpeg|max:5120',

                    ],
                    [
                        'header.required' => 'You must provide a header',
                        'blog_by.required' => 'You must provide blog written by',

                    ]
                );

                if ($validator->fails()) {
                    return response()->json([
                        'message' => 'validationFails',
                        'error' => $validator->errors()
                    ]);
                } else {
                    $data = DestinationDetail::where('id', $request->id)->first();
                    $data->header = $request->header;
                    $data->blog_by = $request->blog_by;
                    $data->source_link = $request->source_link;
                    // $data->description = $request->description;
                    $data->save();
                    return  response()->json([
                        'message' => 'success',
                        'data' => 'updated successfully'
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
}

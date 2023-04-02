<?php

namespace App\Http\Controllers\Event;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use App\Models\Event\EventDetail;
use App\Models\Event\EventImage;
use App\Models\Event\EventActivity;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
//use Illuminate\Support\Facades\File;
use App\Models\File;
use Illuminate\Support\Facades\Storage;



class EventController extends Controller
{
    public function GetAddEvent()
    {
        try {
            return view('event.add_event');
        } catch (Exception $e) {
        }
    }
    public function AddEvent(Request $request)
    {
        try {
            if ($request->ajax()) {

                $validator=Validator::make($request->all(), [
                    'event_title' => 'required|string|max:255',
                    'event_date' => 'required|date',
                    'event_description' => 'nullable',
                    'event_image_main' => 'required',
                    'event_image.*' => 'required_if:image_status,==,1|image|mimes:jpg,png,jpeg|max:10240',
                    'event_activity.*' => 'required_if:activity_status,==,1',
                ]);
                if ($validator->fails()) {

                    return response()->json([
                        'msg' => 'validationFails',
                        'error' => $validator->errors()
                    ]);
                }else{

                    $image_path = $request->file('event_image_main')->store('event', 'public');
                    $EventDetail =new EventDetail();
                    $EventDetail->event_title = $request->event_title;
                    $EventDetail->event_date = Carbon::parse($request->event_date)->format("Y-m-d");
                    $EventDetail->event_image_main = $image_path;
                    $EventDetail->event_description = $request->event_description;
                    $EventDetail->insert_by = Auth::user()->id;
                    $EventDetail->created_at = Carbon::now();
                    $EventDetail->updated_at = Carbon::now();
                    $EventDetail->status=1;
                    $EventDetail->add_image_status=$request->add_image_status == 1 ? 1 : 0;
                    $EventDetail->add_activity_status=$request->add_activity_status == 1 ? 1 : 0;
                    $EventDetail->save();

                    if($request->add_image_status == 1) {
                        $details = [];
                        for ($i = 0; $i < count($request->event_image); $i++)
                         {
                            $event_image_path = $request->file('event_image')[$i]->store('event', 'public');
                            $img[] = $event_image_path;
                            $details[] = [
                                'event_id' => $EventDetail->id,
                                'event_image' => $img[$i],
                                'status' => TRUE,
                                'created_at' => Carbon::now(),
                                'updated_at' => Carbon::now(),
                            ];
                        }
                        $details = collect($details);
                        $chunks = $details->chunk(500);

                        foreach ($chunks as $chunk) {
                            EventImage::insert($chunk->toArray());
                        }
                    }

                    if($request->add_activity_status == 1) {
                        $details = [];
                        for ($i = 0; $i < count($request->event_activity); $i++)
                         {
                            $detailss[] = [
                                'event_id' => $EventDetail->id,
                                'event_activity' => $request->event_activity[$i],
                                'status' => TRUE,
                                'created_at' => Carbon::now(),
                                'updated_at' => Carbon::now(),
                            ];
                        }
                        $detailss = collect($detailss);
                        $chunkss = $detailss->chunk(500);

                        foreach ($chunkss as $chunk) {
                            EventActivity::insert($chunk->toArray());
                        }
                    }

                    return response()->json([
                        'message' => 'success',
                        'request' => 'Event details successfully Inserted',
                    ]);
                }


                }

        } catch (Exception $e) {
            return response()->json([
                'messege' => 'error',
                'request' =>'Something Went Wrong',
            ]);        }
    }

    public function eventList(){
            $data = EventDetail::all();
            return view('event.event_details',['eventdetails'=>$data]);
            //return view('event.event_details');
    }

    public function DatatableEventList(){
        $event_list = EventDetail::where('wheather_active',TRUE)->get();
           return datatables()->of($event_list)
               ->addIndexColumn()
             ->make(true);
    }
    public function GetEditEventData(Request $request)
    {
        return  response()->json([
            'message' => 'success',
            'data' => EventDetail::where('id', $request->id)->first()
        ]);
    }
    public function EditEventData(Request $request)
    {
        try {
            if ($request->ajax()) {
                $validator = Validator::make(
                    $request->all(),
                    [
                        'event_title' => 'required|string|max:255',
                        'event_date' => 'required|date',
                        'event_description' => 'nullable',
                        'event_image_main' => 'required',
                    ],
                    [
                        'event_title.required' => 'You must provide a Event Title',
                        'event_date.required' => 'You must provide a Event Date',
                        'event_image_main.required' => 'You must provide a Event Photo',
                    ]
                );

                if ($validator->fails()) {
                    return response()->json([
                        'message' => 'validationFails',
                        'error' => $validator->errors()
                    ]);
                } else {
                    $data = EventDetail::where('id', $request->id)->first();
                    // $data->hotel_name = $request->hotel_name;
                    // $data->location = $request->location;
                    // $data->contact_no = $request->contact_no;
                    // $data->alt_contact_no = $request->alt_contact_no;
                    // $data->email = $request->email;
                    // $data->alt_email = $request->alt_email;
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

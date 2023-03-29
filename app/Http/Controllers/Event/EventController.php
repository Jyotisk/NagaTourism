<?php

namespace App\Http\Controllers\Event;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use App\Models\Event\EventDetail;
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
           // if ($request->ajax()) {

                $validator=Validator::make($request->all(), [
                    'event_title' => 'required|string|max:255',
                    'event_date' => 'required|date',
                    'event_image' => 'required',
                    'event_description' => 'required|string'
                ]);
                if ($validator->fails()) {

                    return response()->json([
                        'msg' => 'validationFails',
                        'error' => $validator->errors()
                    ]);
                }else{
                           $file = $request->event_image->getClientOriginalName();
                            $path = Storage::putFile('files/event', $request->file('event_image'));

                        $details = [
                            'event_title' => $request->event_title,
                            'event_date' => $request->event_date,
                            'event_image' => $path,
                            'event_description' => $request->event_description,
                            'insert_by' => Auth::user()->id,
                            'wheather_active' => TRUE,
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),

                        ];
                    }
                    $save = EventDetail::insert($details);
                    if($save) {
                        alert()->success('success', 'Successfully Registered');
                    } else {
                        alert()->success('error', 'Something Went Wrong');
                    }


        } catch (Exception $e) {
            return response()->json([
                'messege' => 'error',
                'request' =>'Something Went Wrong',
            ]);        }
    }

    public function eventList(){
        return view('event.event_details');
    }

    public function DatatableEventList(){
        $event_list = EventDetail::where('status',1)->get();
           return datatables()->of($event_list)
               ->addIndexColumn()
             ->make(true);
       }

}

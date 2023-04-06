<?php

namespace App\Http\Controllers\Event;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\event\EventActivity;
use Illuminate\Support\Carbon;
use App\Models\event\EventDetail;
use App\Models\event\EventImage;

class PublicEventController extends Controller
{
    public function events()
    {
        $events = DB::select("SELECT id,event_title,event_image_main,event_description,date_part('day',event_date) AS day,
        TO_CHAR(DATE(event_date), 'Month') AS month,date_part('year',event_date) AS year
        FROM event_details 
        WHERE status=1 ORDER BY id DESC");
        return view("public_event.event_land", compact('events'));
    }
    public function event_details($id)
    {
        $events = collect(DB::select("SELECT id,event_title,event_image_main,event_description,date_part('day',event_date) AS day,
        TO_CHAR(DATE(event_date), 'Month') AS month,date_part('year',event_date) AS year,add_image_status,add_activity_status
        FROM event_details 
        WHERE status=1 AND event_details.id=$id" ))->first();
        $event_activity = EventDetail::leftjoin('event_activities', 'event_activities.event_id', '=', 'event_details.id')
            ->where('event_details.id', $id)
            ->where('event_details.status', 1)
            ->select('event_activities.event_activity')
            ->get();
        return view("public_event.event_details", compact('events', 'event_activity'));
    }
    public function SearchEvents(Request $request)
    {
        $messege="";
        if ($request->date) {
            $month = $request->month + 1;
            $i_date = $request->date . '-' . $month . '-' . $request->year;
            $date = Carbon::parse($i_date)->format("Y-m-d");
            $messege=$date;
            $events = DB::select("SELECT id,event_title,event_image_main,event_description,date_part('day',event_date) AS day,
            TO_CHAR(DATE(event_date), 'Month') AS month,date_part('year',event_date) AS year,add_image_status,add_activity_status
            FROM event_details 
            WHERE status=1 AND event_date='$date' ORDER BY id DESC");
        } elseif ($request->search) {
            $messege=$request->search;
            $events = DB::select("SELECT id,event_title,event_image_main,event_description,date_part('day',event_date) AS day,
            TO_CHAR(DATE(event_date), 'Month') AS month,date_part('year',event_date) AS year,add_image_status,add_activity_status
            FROM event_details 
            WHERE status=1 AND LOWER(event_title) LIKE LOWER('%$request->search%') ORDER BY id DESC");
        } else {
            $events = DB::select("SELECT id,event_title,event_image_main,event_description,date_part('day',event_date) AS day,
            TO_CHAR(DATE(event_date), 'Month') AS month,date_part('year',event_date) AS year,add_image_status,add_activity_status
            FROM event_details 
            WHERE status=1 ORDER BY id DESC");
        }
        if (!empty($events)) {
            $events = $events;
        } else {
            $messege="No Data Found";
            $events = DB::select("SELECT id,event_title,event_image_main,event_description,date_part('day',event_date) AS day,
            TO_CHAR(DATE(event_date), 'Month') AS month,date_part('year',event_date) AS year,add_image_status,add_activity_status
            FROM event_details 
            WHERE status=1 ORDER BY id DESC");
        }
        return view("public_event.event_land", compact('events','messege'));
    }


}

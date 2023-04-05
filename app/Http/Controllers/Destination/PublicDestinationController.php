<?php

namespace App\Http\Controllers\Destination;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Destination\DestinationDetail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class PublicDestinationController extends Controller
{
    public function destination()
    {
        $destinations = DB::select("SELECT id,header,image,description,date_part('day',blog_date) AS day,
        TO_CHAR(DATE(blog_date), 'Month') AS month,date_part('year',blog_date) AS year
        FROM destination_details 
        WHERE status=1");
        return view("public_destination.destination_land", compact('destinations'));
    }

    public function destination_details($id)
    {
        $destinations = collect(DB::select("SELECT DD.id,DD.header,DD.image,DD.description,date_part('day',DD.blog_date) AS day,
        TO_CHAR(DATE(DD.blog_date), 'Month') AS month,date_part('year',DD.blog_date) AS year,DD.add_more_status,
        BC.category_name AS category_name
        FROM destination_details DD
        LEFT JOIN blog_categories BC
        ON DD.blog_categories_id=BC.id
        WHERE DD.status=1 AND DD.id=$id"))->first();
        $more_destination = DestinationDetail::leftjoin('more_destination_details', 'more_destination_details.destination_detail_id', '=', 'destination_details.id')
            ->where('destination_details.id', $id)
            ->where('destination_details.status', 1)
            ->select('more_destination_details.image', 'more_destination_details.image_by', 'more_destination_details.description')
            ->get();
        return view("public_destination.destination_details", compact('destinations', 'more_destination'));
    }
    public function SearchDestination(Request $request)
    {
        $messege="";
        if ($request->date) {
            $month = $request->month + 1;
            $i_date = $request->date . '-' . $month . '-' . $request->year;
            $date = Carbon::parse($i_date)->format("Y-m-d");
            $messege=$date;
            $destinations = DB::select("SELECT id,header,image,description,date_part('day',blog_date) AS day,
            TO_CHAR(DATE(blog_date), 'Month') AS month,date_part('year',blog_date) AS year
            FROM destination_details 
            WHERE status=1 AND blog_date='$date'");
        } elseif ($request->search) {
            $messege=$request->search;
            $destinations = DB::select("SELECT id,header,image,description,date_part('day',blog_date) AS day,
            TO_CHAR(DATE(blog_date), 'Month') AS month,date_part('year',blog_date) AS year
            FROM destination_details 
            WHERE status=1 AND LOWER(header) LIKE LOWER('%$request->search%')");
        } else {
            $destinations = DB::select("SELECT id,header,image,description,date_part('day',blog_date) AS day,
            TO_CHAR(DATE(blog_date), 'Month') AS month,date_part('year',blog_date) AS year
            FROM destination_details 
            WHERE status=1");
        }
        if (!empty($destinations)) {
            $destinations = $destinations;
        } else {
            $messege="No Data Found";
            $destinations = DB::select("SELECT id,header,image,description,date_part('day',blog_date) AS day,
            TO_CHAR(DATE(blog_date), 'Month') AS month,date_part('year',blog_date) AS year
            FROM destination_details 
            WHERE status=1");
        }
        return view("public_destination.destination_land", compact('destinations','messege'));
    }
}

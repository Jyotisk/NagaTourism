<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destination\DestinationDetail;
use Illuminate\Support\Facades\Log;
use App\Models\VisitorCountDetail;
use App\Models\Event\EventDetail;
use App\Models\DesignatedOfficial\DesignatedOfficialDetail;

use App\Models\Blog\Blog;
class HomeController extends Controller
{
    public function index()
    {
        if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
            $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
            $_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
        }
        $client  = @$_SERVER['HTTP_CLIENT_IP'];
        $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
        $remote  = $_SERVER['REMOTE_ADDR'];

        if (filter_var($client, FILTER_VALIDATE_IP)) {
            $ip = $client;
        } elseif (filter_var($forward, FILTER_VALIDATE_IP)) {
            $ip = $forward;
        } else {
            $ip = $remote;
        }

        $visitors = new VisitorCountDetail;
        $visitors->ip_address = $ip;
        $visitors->save();

        $destination = DestinationDetail::limit(5)->where('status', 1)->select('id','header', 'image', 'description')->orderBY('id','DESC')->get();
        $events=EventDetail::limit(4)->where('status', 1)->select('id','event_title','event_date', 'event_image_main', 'event_description','created_at')->orderBY('id','DESC')->get();
       $blogs=Blog::select('id','blog_title','blog_description', 'blog_banner','created_at')->where('blog_active_status',1)->limit(4)->get();
        return view('welcome', compact('destination','events','blogs'));
    }

    public function about_us()
    {
        return view('public_about.about_us');
    }

    public function about_nagaland()
    {
        return view('public_about.about_nagaland');
    }

    public function PublicOfficialList()
    {
        $to_list = DesignatedOfficialDetail::where(['status' => 1, 'official_type' => 1])->get();
        return datatables()->of($to_list)
            ->addIndexColumn()
            ->make(true);
    }

    public function about_districts()
    {
        return view('public_about.about_districts');
    }

    public function offroad()
    {
        return view('public_offroad.nagaland_offroad');
    }
}

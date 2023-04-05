<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destination\DestinationDetail;
use Illuminate\Support\Facades\Log;
use App\Models\VisitorCountDetail;

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

        $destination = DestinationDetail::limit(5)->where('status', 1)->select('header', 'image', 'description')->get();
        return view('welcome', compact('destination'));
    }

    public function about_us()
    {
        return view('public_about.about_us');
    }

    public function about_nagaland()
    {
        return view('public_about.about_nagaland');
    }
}

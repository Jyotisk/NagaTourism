<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destination\DestinationDetail;

class HomeController extends Controller
{
public function index(){
    $destination=DestinationDetail::limit(5)->where('status',1)->select('header','image','description')->get();
    return view('welcome',compact('destination'));
}
}

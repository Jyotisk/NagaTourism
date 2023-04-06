<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Blog\Blog;
use Illuminate\Support\Carbon;
class PublicBlogController extends Controller
{
    public function blog () {
        $blogs = DB::select("SELECT id,blog_title,blog_banner,blog_description,date_part('day',created_at) AS day,
        TO_CHAR(DATE(created_at), 'Month') AS month,date_part('year',created_at) AS year
        FROM blogs 
        WHERE blog_active_status=1  ORDER BY id DESC");
        return view ("public_blog.blog_land",compact('blogs'));
    }

    public function blog_details($id)
    {
        $blogs = collect(DB::select("SELECT DD.id,DD.blog_title,DD.blog_banner,DD.blog_description,date_part('day',DD.created_at) AS day,
        TO_CHAR(DATE(DD.created_at), 'Month') AS month,date_part('year',DD.created_at) AS year,
        BC.category_name AS category_name
        FROM blogs DD
        LEFT JOIN blog_categories BC
        ON DD.blog_category_id=BC.id
        WHERE DD.blog_active_status=1 AND DD.id=$id"))->first();
        return view("public_blog.blog_details", compact('blogs'));
    }
    public function SearchBlogs(Request $request)
    {
        $messege="";
        if ($request->date) {
            $month = $request->month + 1;
            $i_date = $request->date . '-' . $month . '-' . $request->year;
            $date = Carbon::parse($i_date)->format("Y-m-d");
            $messege=$date;
            $blogs = DB::select("SELECT id,blog_title,blog_banner,blog_description,date_part('day',created_at) AS day,
            TO_CHAR(DATE(created_at), 'Month') AS month,date_part('year',created_at) AS year
            FROM blogs 
            WHERE blog_active_status=1 AND DATE(created_at)='$date'  ORDER BY id DESC");
        } elseif ($request->search) {
            $messege=$request->search;
            $blogs = DB::select("SELECT id,blog_title,blog_banner,blog_description,date_part('day',created_at) AS day,
            TO_CHAR(DATE(created_at), 'Month') AS month,date_part('year',created_at) AS year
            FROM blogs 
            WHERE blog_active_status=1 AND LOWER(blog_title) LIKE LOWER('%$request->search%')  ORDER BY id DESC");
        } else {
            $blogs = DB::select("SELECT id,blog_title,blog_banner,blog_description,date_part('day',created_at) AS day,
            TO_CHAR(DATE(created_at), 'Month') AS month,date_part('year',created_at) AS year
            FROM blogs 
            WHERE blog_active_status=1  ORDER BY id DESC");
        }
        if (!empty($blogs)) {
            $blogs = $blogs;
        } else {
            $messege="No Data Found";
            $blogs = DB::select("SELECT id,blog_title,blog_banner,blog_description,date_part('day',created_at) AS day,
            TO_CHAR(DATE(created_at), 'Month') AS month,date_part('year',created_at) AS year
            FROM blogs 
            WHERE blog_active_status=1  ORDER BY id DESC");
        }
        return view("public_blog.blog_land", compact('blogs','messege'));
    }
}

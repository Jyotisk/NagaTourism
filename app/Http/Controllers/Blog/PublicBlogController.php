<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PublicBlogController extends Controller
{
    public function blog () {
        return view ("public_blog.blog_land");
    }
}

<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use App\Models\Blog\Blog;
use App\Models\BlogCategory;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\User;


class BlogController extends Controller
{
    public function GetAddBlog()
    {
        $blogCategry = BlogCategory::where('category_active_status', 1)->get();
        return view('blog.add_blog', compact('blogCategry'));
    }


    public function PostNewBlog(Request $request)
    {
        try {
            if ($request->ajax()) {
                $validator = Validator::make(
                    $request->all(),
                    [
                        'blog_title' => 'required|string|max:255',
                        'blog_category' => 'required',
                        'creator_name' => 'required|',
                        'blog_description' => 'required|',
                        'image' => 'mimetypes:image/jpeg,image/jpg,image/png|max:2048'

                    ],
                    [
                        'blog_title.required' => 'You must provide a blog title',
                        'blog_category.required' => 'You must provide a category',
                        'creator_name.required' => 'You must provide a creator Name',
                        'blog_description.required' => 'You must provide blog description',

                    ]
                );

                if ($validator->fails()) {

                    return response()->json([
                        'messege' => 'validationFails',
                        'error' => $validator->errors()
                    ]);
                } else {

                    $image_path = $request->file('image')->store('blogs', 'public');

                    $data = new Blog();
                    $data->blog_title = $request->blog_title;
                    $data->blog_category_id = $request->blog_category;
                    $data->blog_tag = $request->blog_tag;
                    $data->blog_creator_name = $request->creator_name;
                    $data->blog_description = $request->blog_description;
                    $data->user_id = Auth::user()->id;
                    $data->blog_banner = $image_path;
                    $data->created_at = Carbon::now();
                    $data->updated_at = Carbon::now();
                    $data->save();

                    return response()->json([
                        'messege' => 'success',
                        'request' => 'Blog details successfully Inserted',
                    ]);
                }
            }
        } catch (Exception $e) {
            return $e;
            return response()->json([
                'messege' => 'error',
                'request' => 'Something Went Wrong',
            ]);
        }
    }


    public function GetBlogList()
    {
        $blog=Blog::first();
        return view('blog.manage_blogs',compact('blog'));
    }


    public function DatatableBlogList()
    {

        $blog_list = Blog::join('blog_categories', 'blog_categories.id', '=', 'blogs.blog_category_id')
            ->where('blogs.blog_active_status', 1)
            ->get(['blogs.*', 'blog_categories.category_name']);

        // $blog_list = Blog::where('blog_active_status', 1)->get();
        return datatables()->of($blog_list)
            ->addIndexColumn()
            ->make(true);
    }

    public function DeleteBlogData(Request $request)
    {
        $data = Blog::where('id', $request->id)->first();
        $data->blog_active_status = 0;
        $data->save();
        return  response()->json([
            'message' => 'success',
            'data' => 'Blog deleted successfully'
        ]);
    }
}

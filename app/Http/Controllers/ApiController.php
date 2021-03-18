<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Blog;

class ApiController extends Controller
{
    // This func return that all client rows
    public function index(Request $request){
        $blog = Blog::all();

        return response($blog, '200');
    }

    // Return blog with blog_id
    public function get_blog(Request $request){
        $blog = Blog::find($request->blog_id);

        if ($blog == null) {
            return response (['message' => 'There is no blog'], 404);
        }

        return response($blog, 200);
    }
}

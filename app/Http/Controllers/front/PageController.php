<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Facade\FlareClient\View;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index()
    {
        $classes = Blog::whereHas('categories', function($q) {
            $q->where('name', 'class');
        })->take(3);

        return view('frontend.dashboard.index' ,[
            'classes'=> $classes
        ]);
    }

    public function indexClass()
    {
        $blogs = Blog::whereHas('categories', function($q) {
            $q->where('name', 'class');
        })->paginate(10);

        return view('frontend.blog.index' ,[
            'blogs'=> $blogs
        ]);
    }

    public function indexProgram()
    {
        $blogs = Blog::whereHas('categories', function($q) {
            $q->where('name', 'program');
        })->paginate(10);

        return view('frontend.blog.index' ,[
            'blogs'=> $blogs
        ]);
    }

    public function indexOpini()
    {
        $blogs = Blog::whereHas('categories', function($q) {
            $q->where('name', 'opini');
        })->paginate(10);

        return view('frontend.blog.index' ,[
            'blogs'=> $blogs                                                                                                                                                            
        ]);
    }

    public function indexCorner()
    {
        $blogs = Blog::whereHas('categories', function($q) {
            $q->where('name', 'corner');
        })->paginate(10);

        return view('frontend.blog.index' ,[
            'blogs'=> $blogs
        ]);
    }
}

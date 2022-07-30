<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\FrontPage;
use App\Models\Homepage;
use App\Models\Image;
use Facade\FlareClient\View;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index()
    {
        $classes = Blog::whereHas('categories', function($q) {
            $q->where('name', 'class');
        })->take(3)->get();

        $adss = Image::take(6)->get();
        $home = Homepage::first();
        $corners = Blog::whereHas('categories', function($q) {
            $q->where('name', 'corner');
        })->take(3)->get();

        return view('frontend.dashboard.index' ,[
            'classes'=> $classes,
            'adss' => $adss,
            'home' => $home,
            'corners' => $corners,
        ]);
    }

    public function indexClass()
    {
        $blogs = Blog::whereHas('categories', function($q) {
            $q->where('name', 'class');
        })->paginate(10);
        
        $page = FrontPage::whereHas('categories', function($q) {
            $q->where('name', 'class');
        })->first();

        return view('frontend.blog.index' ,[
            'blogs'=> $blogs,
            'page'=>$page

        ]);
    }

    public function indexProgram()
    {
        $blogs = Blog::whereHas('categories', function($q) {
            $q->where('name', 'program');
        })->paginate(10);

        $page = FrontPage::whereHas('categories', function($q) {
            $q->where('name', 'program');
        })->first();


        return view('frontend.blog.index' ,[
            'blogs'=> $blogs,
            'page'=>$page
        ]);
    }

    public function indexOpini()
    {
        $blogs = Blog::whereHas('categories', function($q) {
            $q->where('name', 'opini');
        })->paginate(10);

        $page = FrontPage::whereHas('categories', function($q) {
            $q->where('name', 'opini');
        })->first();

        return view('frontend.blog.index' ,[
            'blogs'=> $blogs,
            'page'=>$page                                                                                                                                                           
        ]);
    }

    public function indexCorner()
    {
        $blogs = Blog::whereHas('categories', function($q) {
            $q->where('name', 'corner');
        })->paginate(10);

        $page = FrontPage::whereHas('categories', function($q) {
            $q->where('name', 'corner');
        })->first();

        return view('frontend.blog.index' ,[
            'blogs'=> $blogs,
            'page'=>$page
        ]);
    }

    public function show($slug) {
        $article = Blog::where('slug', $slug)->first();
       

        return view('frontend.blog.post',[
            'article' => $article,
        ]);

    }
}

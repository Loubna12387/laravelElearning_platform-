<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }
    public function about()
    {
        return view('about');
    }
    public function courses()
    {
        return view('courses');
    }
    public function blog()
    {
        return view('blog');
    }
    public function contact()
    {
        return view('contact');
    }
}

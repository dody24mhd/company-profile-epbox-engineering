<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function home()
    {
        return view('site.pages.home');
    }
    public function about()
    {
        return view('site.pages.about');
    }
    public function services()
    {
        return view('site.pages.services');
    }
    public function industries()
    {
        return view('site.pages.industries');
    }
    public function contact()
    {
        return view('site.pages.contact');
    }
    public function blog()
    {
        return view('site.pages.blog');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function contact()
    {
        return view('contact');
    }
    public function about(){
        return view('about');
    }
    public function blog()
    {
        return view('blog');
    }
    public function singlePost()
    {
        return view('singlePost');
    }
    public function singleProject()
    {
        return view('singleProject');
    }   
}

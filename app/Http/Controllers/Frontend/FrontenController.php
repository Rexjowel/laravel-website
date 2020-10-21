<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontenController extends Controller
{
    public function index(){
        return view('frontend.layouts.home');
    }

    public function aboutUs(){
        
        return view('frontend.single_pages.about-us');
    }

    public function contactUs(){
        
        return view('frontend.single_pages.contact-us');
    }
}

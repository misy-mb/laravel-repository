<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('frontend.pages.home.home');
    }

    public function about_us()
    {
        return view('frontend.pages.about-us.about-us');
    }

    public function contact_us(){
        return view('frontend.pages.contact-us.contact-us');
    }

    public function menu(){
        return view('frontend.pages.menu.menu');
    }

    public function gallery(){
        return view('frontend.pages.gallery.gallery');
    }

    public function service(){
        return view('frontend.pages.service.service');
    }
   
}

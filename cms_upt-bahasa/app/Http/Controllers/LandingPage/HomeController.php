<?php

namespace App\Http\Controllers\LandingPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use routes\web;

class HomeController extends Controller
{
    public function index(){
        $news = News::all();
        return view('pages.landing-page.home', compact ('news'));
    }
}

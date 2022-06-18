<?php

namespace App\Http\Controllers\LandingPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;

class NewsDetailController extends Controller
{
    public function index($id_news){
        $news = News::findorfail($id_news);
        return view('pages.landing-page.newsdetail', compact('news'));
    }
}

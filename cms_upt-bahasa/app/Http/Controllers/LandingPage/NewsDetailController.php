<?php

namespace App\Http\Controllers\LandingPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Service;
use App\Models\Procedure;

class NewsDetailController extends Controller
{
    public function index($id_news){
        $service_data = Service::all();
        $procedure_data = Procedure::all();
        $news = News::findorfail($id_news);
        return view('pages.landing-page.newsdetail', compact('news','service_data','procedure_data'));
    }
}

<?php

namespace App\Http\Controllers\LandingPage;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\Service;
use App\Models\Procedure;
use DB;

class HomeController extends Controller
{
    public function index(){
        
        $service_data = Service::all();
        $procedure_data = Procedure::all();
        $news = News::orderby('id_news','desc')->paginate(3);
        $users = DB::table('users')->Where('roles', 'USER')->count();
        $teaching_staff = DB::table('teaching_staff')->count();
        $regtraining = DB::table('training_registration')->count();
        return view('pages.landing-page.home', compact ('news', 'users', 'teaching_staff', 'regtraining', 'service_data','procedure_data'));
    }
}

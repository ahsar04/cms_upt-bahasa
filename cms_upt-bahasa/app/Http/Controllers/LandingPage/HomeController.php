<?php

namespace App\Http\Controllers\LandingPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use routes\web;
use DB;

class HomeController extends Controller
{
    public function index(){
        $news = News::all();
        $users = DB::table('users')->Where('roles', 'USER')->count();
        $teaching_staff = DB::table('teaching_staff')->count();
        $regtraining = DB::table('training_registration')->count();
        return view('pages.landing-page.home', compact ('news', 'users', 'teaching_staff', 'regtraining'));
    }
}

<?php

namespace App\Http\Controllers\LandingPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EptController extends Controller
{
    public function index(Request $request){
        return view ('pages.landing-page.ept');
    }
}

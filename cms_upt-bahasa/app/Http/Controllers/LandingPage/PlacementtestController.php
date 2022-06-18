<?php

namespace App\Http\Controllers\LandingPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Training;

class PlacementtestController extends Controller
{   
    public function index(){
        $training = Training::where('service_type', 'Placement Test')->get();
        return view('pages.landing-page.placement-test', compact('training'));
    }
}

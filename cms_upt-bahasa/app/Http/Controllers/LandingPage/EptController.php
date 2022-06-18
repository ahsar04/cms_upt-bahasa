<?php

namespace App\Http\Controllers\LandingPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Training;

class EptController extends Controller
{
    public function index(){
        $training = Training::where('service_type', 'EPT (English Proficiency Test)')->get();
        return view ('pages.landing-page.ept', compact('training'));
    }
}

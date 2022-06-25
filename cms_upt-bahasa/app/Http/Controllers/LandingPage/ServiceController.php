<?php

namespace App\Http\Controllers\LandingPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\training;
use App\Models\Service;
use App\Models\Procedure;

class ServiceController extends Controller
{
    public function index($service){
        $service_data = Service::all();
        $procedure_data = Procedure::all();
        $training = Training::where('service_type', $service)->get();
        return view('pages.landing-page.service', compact('training','service_data','procedure_data'));
    }
}

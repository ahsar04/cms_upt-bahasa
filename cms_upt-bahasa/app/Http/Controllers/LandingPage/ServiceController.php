<?php

namespace App\Http\Controllers\LandingPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Training;
use App\Models\Service;
use App\Models\Procedure;

class ServiceController extends Controller
{
    public function index($service){
        $service_data = Service::all();
        $procedure_data = Procedure::all();
        $title=$service;
        $training = Training::where([
                                    ['service_type', '=', $service],
                                    ['closing_date', '>=', date('Y-m-d')],
                                    ])->get();  
        return view('pages.landing-page.service', compact('training','service_data','procedure_data','title'));
    }
}

<?php

namespace App\Http\Controllers\LandingPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Procedure;

class VisiMisiController extends Controller
{
    public function index(Request $request){
        $service_data = Service::all();
        $procedure_data = Procedure::all();
        return view('pages.landing-page.visimisi',compact('service_data','procedure_data'));
    }
}

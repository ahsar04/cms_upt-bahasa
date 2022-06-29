<?php

namespace App\Http\Controllers\LandingPage;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Procedure;

class ProcedureController extends Controller
{
    public function index($procedure_menu){
        $service_data = Service::all();
        $procedure_data = Procedure::all();
        $title=$procedure_menu;
        $procedure = Procedure::where('headline_procedure', $procedure_menu)->get();
        return view('pages.landing-page.procedure', compact('procedure','procedure_data','service_data','title'));
    }
}

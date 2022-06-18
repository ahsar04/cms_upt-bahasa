<?php

namespace App\Http\Controllers\LandingPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Procedure;

class CertificateController extends Controller
{
    public function index(){
        $procedure = Procedure::where('headline_procedure', 'Procedure to Take Certificate')->get();
        return view('pages.landing-page.certificate', compact('procedure'));
    }
}

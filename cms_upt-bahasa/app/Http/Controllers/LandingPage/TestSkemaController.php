<?php

namespace App\Http\Controllers\LandingPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Procedure;

class TestSkemaController extends Controller
{
    public function index (){
        $procedure = Procedure::where('headline_procedure', 'Procedure Test Skema')->get();
        return view('pages.landing-page.test_skema', compact('procedure'));
    }
}

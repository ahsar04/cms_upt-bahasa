<?php

namespace App\Http\Controllers\LandingPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Procedure;

class TestResultController extends Controller
{
    public function index(){
        $procedure = Procedure::where('headline_procedure', 'Procedure to See Result')->get();
        return view('pages.landing-page.test-result', compact('procedure'));
    }
}

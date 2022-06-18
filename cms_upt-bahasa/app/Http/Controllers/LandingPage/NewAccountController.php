<?php

namespace App\Http\Controllers\LandingPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Procedure;

class NewAccountController extends Controller
{
    public function index (){
        $procedure = Procedure::where('headline_procedure', 'Procedure to Make Account')->get();
        return view('pages.landing-page.new-account', compact('procedure'));
    }
}

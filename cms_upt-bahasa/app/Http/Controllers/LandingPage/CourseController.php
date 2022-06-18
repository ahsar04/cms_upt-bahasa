<?php

namespace App\Http\Controllers\LandingPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Training;

class CourseController extends Controller
{
    public function index(){
        $training = Training::where('service_type', 'Course')->get();
        return view('pages.landing-page.course', compact('training'));
    }
}

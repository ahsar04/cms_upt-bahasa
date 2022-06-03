<?php

namespace App\Http\Controllers\LandingPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Teacher;
use routes\web;

class TeachingStaffController extends Controller
{
    public function index(){
        $teaching_staff = Teacher::all();
        return view('pages.landing-page.teachingstaff', compact('teaching_staff'));
    }
}

<?php

namespace App\Http\Controllers\LandingPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Service;
use App\Models\Procedure;
use routes\web;

class TeachingStaffController extends Controller
{
    public function index(){
        $service_data = Service::all();
        $procedure_data = Procedure::all();
        $teaching_staff = Teacher::all();
        return view('pages.landing-page.teachingstaff', compact('teaching_staff','service_data', 'procedure_data'));
    }
}

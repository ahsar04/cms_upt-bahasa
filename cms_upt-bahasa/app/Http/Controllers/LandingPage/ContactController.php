<?php

namespace App\Http\Controllers\LandingPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Feedback;
use App\Models\Service;
use App\Models\Procedure;
use routes\web;

class ContactController extends Controller
{
    public function index(){
        
        $service_data = Service::all();
        $procedure_data = Procedure::all();
        return view('pages.landing-page.contact',compact('service_data','procedure_data'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'feedback' => 'required',
        ]);

        Feedback::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'feedback'=> $request->feedback,
        ]);

        return redirect('contact')->with('toast_success', 'Data Added Successfully');
    }

}

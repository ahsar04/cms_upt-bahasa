<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TrainingRegistration;
use App\Models\Training;
use App\Models\User;
use routes\web;
use DB;

class RegTrainingController extends Controller
{
    public function index(Request $request){
        $training = Training::findorfail($request->id_training);
        $user = User::all();
        return view('pages.user.regtraining', compact('training', 'user'));
    }

    public function store(Request $request) 
    {
        $request->validate([
            'id' => 'required',
            'id_training' => 'required',
            'status' => 'required',
            'note' => 'required',
        ]);
        
        TrainingRegistration::create([
            'id' => $request->id,
            'id_training' => $request->id_training,
            'status' => $request->status,
            'note' => $request->note,
        ]);

        return redirect('qrcode')->with('toast_success', 'Registration Successfully');
    }
}
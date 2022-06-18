<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TrainingRegistration;
use routes\web;

class QRCodeController extends Controller
{
    public function index(Request $request)
    {
        $training_registration = TrainingRegistration::findorfail($request->id_training_registration);
        return view('pages.user.qrcode', compact('training_registration'));
    }
}

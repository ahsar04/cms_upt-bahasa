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
        $training_registration = TrainingRegistration::where('id', '=', $request->id)->get(); 
        return view('pages.user.qrcode', compact('training_registration'));
    }

    public function generate(Request $request)
    {
        $training_registration = TrainingRegistration::where([
            ['id', '=', $request->id],
            ['id_training', '=', $request->id_training]
        ])->first();
        $qrcode = QrCode::size(150)->generate($training_registration->id_training_registration);
        return view('qrcode', compact('training_registration'));
    }
}

<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TrainingRegistration;
use App\Models\Training;
use App\Models\User;
use routes\web;
use setasign\Fpdi\Fpdi;
use DB;

class RegTrainingController extends Controller
{
    public function index(Request $request){
        $training = Training::findorfail($request->id_training);
        $user = User::all();
        return view('pages.user.regtraining', compact('training', 'user'));
    }
    public function printCard($id_training_registration){
        $cek = TrainingRegistration::findorfail($id_training_registration);
        if ($cek!=null) {
            $registraining = TrainingRegistration::where('training_registration.id_training_registration','=',$id_training_registration)
                        ->join('users', 'users.id', '=', 'training_registration.id')
                        ->join('training', 'training.id_training', '=', 'training_registration.id_training')->get();
        return view('pages.user.printCard', compact('registraining'));
        }
    }
    public function Certificate(Request $request)
    {
        $nama = 'Azizatul Mashwafah';
        $outputFile = public_path().'dcc.pdf';
        $this->fillPDF(public_path().'/master/dcc.pdf', $outputFile, $nama);

        return response()->file($outputFile);
    }
    public function fillPDF($file, $outputFile, $nama)
    {
        $fpdi = new FPDI;
        $fpdi->setSourcefile($file);
        $template = $fpdi->importPage(1);
        $size = $fpdi->getTemplateSize($template);
        $fpdi->addPage($size['orientation'], array($size['width'], $size['height']));
        $fpdi->useTemplate($template);
        $top = 74;
        $right = 120;
        $name = $nama;
        $fpdi->SetXY(30, 30);
        $fpdi->setFont('helvetica', '', '17');
        $fpdi->setTextColor(25, 26, 25);
        $fpdi->Text($right, $top, $name);

        return $fpdi->Output($outputFile, 'F');
    }
    public function store(Request $request) 
    {
        $request->validate([
            'id' => 'required',
            'id_training' => 'required',
            'status' => 'required',
            'note' => 'required',
        ]);

        $training_registration = TrainingRegistration::where([
            ['id', '=', $request->id],
            ['id_training', '=', $request->id_training]
        ])->first();

        if ($training_registration) {
            return redirect('dashboard')->with('toast_error', 'You are already registered');
        }
        
        TrainingRegistration::create([
            'id' => $request->id,
            'id_training' => $request->id_training,
            'status' => $request->status,
            'note' => $request->note,
        ]);

        //$training_registration = TrainingRegistration::findorfail($request->id_training_registration);
        return redirect()->route('qrcode', ['id' => $request->id, 'id_training' => $request->id_training])->with('toast_success', 'Registration Successfully');
    }
}
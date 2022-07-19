<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TrainingRegistration;
use App\Models\User;
use App\Models\Training;
use routes\web;
use DB;

class RegisTrainingController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }
    public function index(){
        $registraining = TrainingRegistration::join('users', 'users.id', '=', 'training_registration.id')
                        ->join('training', 'training.id_training', '=', 'training_registration.id_training')
                        ->orderBy('id_training_registration', 'desc')->get();
        return view('pages.admin.registraining.registraining', compact('registraining'));
    }
    public function edit($id_training_registration){
        $registraining = TrainingRegistration::findorfail($id_training_registration);
        return view('pages.admin.registraining.edit', compact('registraining'));
    }
    public function detail($id_training_registration){
        $cek = TrainingRegistration::findorfail($id_training_registration);
        if ($cek!=null) {
            $registraining = TrainingRegistration::where('training_registration.id_training_registration','=',$id_training_registration)
                        ->join('users', 'users.id', '=', 'training_registration.id')
                        ->join('training', 'training.id_training', '=', 'training_registration.id_training')->get();
        return view('pages.admin.registraining.detail', compact('registraining'));
        }
    }
    public function update(Request $request, $id_training_registration)
    {
        $registraining = TrainingRegistration::findorfail($id_training_registration);
        $registraining->update($request->all());
        return redirect('admin/registraining')->with('toast_success', 'Data Updated Successfully');
    }
    public function destroy($id_training_registration)
    {
        $registraining = TrainingRegistration::findorfail($id_training_registration);
        $registraining->delete();
        return back()->with('toast_success', 'Data Deleted Successfully');;
    }
}

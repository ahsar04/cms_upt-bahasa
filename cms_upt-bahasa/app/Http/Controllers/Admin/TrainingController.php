<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Training;
use App\Models\Service;
use routes\web;

class TrainingController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }
    public function index(){
        $training = Training::orderBy('id_training', 'desc')->get();
        return view('pages.admin.training.training', compact('training'));
    }
    public function add(){
        $service = Service::orderBy('id_service', 'desc')->get();
        return view('pages.admin.training.add',compact('service'));
    }
    public function edit($id_training){
        $service = Service::orderBy('id_service', 'desc')->get();
        $training = Training::findorfail($id_training);
        return view('pages.admin.training.edit', compact('training','service'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'training' => 'required',
            'service_type' => 'required',
            'description_training' => 'required',
            'quota' => 'required',
            'opening_date' => 'required',
            'excercise_date' => 'required',
            'closing_date' => 'required',
        ]);

        Training::create([
            'training' => $request->training,
            'service_type' => $request->service_type,
            'description_training' => $request->description_training,
            'quota' => $request->quota,
            'opening_date' => $request->opening_date,
            'excercise_date' => $request->excercise_date,
            'closing_date' => $request->closing_date,
        ]);

        return redirect('admin/training')->with('toast_success', 'Data Added Successfully');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param int $id_training
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_training)
    {
        $training = Training::findorfail($id_training);
        $training->update($request->all());
        return redirect('admin/training')->with('toast_success', 'Data Updated Successfully');
    }

    /**
     * @param int $id_training
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_training)
    {
        $id_training = Training::findorfail($id_training);
        $id_training->delete();
        return back()->with('toast_success', 'Data Deleted Successfully');;
    }
}

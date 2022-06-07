<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Procedure;
use routes\web;

class ProcedureController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }
    public function index(){
        $procedure = Procedure::all();
        return view('pages.admin.procedure.procedure', compact('procedure'));
    }
    public function add(){
        return view('pages.admin.procedure.add');
    }
    public function edit($id_procedure){
        $procedure = Procedure::findorfail($id_procedure);
        return view('pages.admin.procedure.edit', compact('procedure'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'headline_procedure' => 'required',
            'description_procedure' => 'required',
            'link_procedure' => 'required',
        ]);

        Procedure::create([
            'headline_procedure' => $request->headline_procedure,
            'description_procedure' => $request->description_procedure,
            'link_procedure' => $request->link_procedure
        ]);

        return redirect('admin/procedure')->with('toast_success', 'Data Added Successfully');
    }

    public function update(Request $request, $id_procedure)
    {
        $procedure = Procedure::findorfail($id_procedure);
        $procedure->update($request->all());
        return redirect('admin/procedure')->with('toast_success', 'Data Updated Successfully');
    }

    public function destroy($id_procedure)
    {
        $procedure = Procedure::findorfail($id_procedure);
        $procedure->delete();
        return back()->with('toast_success', 'Data Deleted Successfully');;
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Teacher;
use routes\web;

class TeacherController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }
    public function index(){
        $teaching_staff = Teacher::all();
        return view('pages.admin.teacher.teacher', compact('teaching_staff'));
    }
    public function add(){
        return view('pages.admin.teacher.add');
    }
    public function edit($id_teaching_staff){
        $teaching_staff = Teacher::findorfail($id_teaching_staff);
        return view('pages.admin.teacher.edit', compact('teaching_staff'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nip' => 'required',
            'fullname' => 'required',
            'position' => 'required',
            'google_scholar' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'address' => 'required',
            'facebook' => 'required',
            'instagram' => 'required',
            'picture' => 'required',
        ]);

        Teacher::create([
            'nip' => $request->nip,
            'fullname' => $request->fullname,
            'position' => $request->position,
            'google_scholar' => $request->google_scholar,
            'phone' => $request->phone,
            'email' => $request->email,
            'address' => $request->address,
            'facebook' => $request->facebook,
            'instagram' => $request->instagram,
            'picture' => $request->picture
        ]);

        return redirect('admin/teacher')->with('toast_success', 'Data Added Successfully');
    }

    public function update(Request $request, $id_teaching_staff)
    {
        $teaching_staff = Teacher::findorfail($id_teaching_staff);
        $teaching_staff->update($request->all());
        return redirect('admin/teacher')->with('toast_success', 'Data Updated Successfully');
    }

    public function destroy($id_teaching_staff)
    {
        $teaching_staff = Teacher::findorfail($id_teaching_staff);
        $teaching_staff->delete();
        return back()->with('toast_success', 'Data Deleted Successfully');;
    }
}

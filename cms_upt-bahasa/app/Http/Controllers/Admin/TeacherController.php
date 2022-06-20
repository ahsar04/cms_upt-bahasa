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
        $this->validate($request, [
            'nip' => 'required',
            'fullname' => 'required',
            'position' => 'required',
            'google_scholar' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'address' => 'required',
            'facebook' => 'required',
            'instagram' => 'required',
            'picture' => 'required|file|image|mimes:jpeg,jpg,png|max:1024',
        ]);

        $teaching_staff = $request->picture;
        $namafile = Date('His').round(1,999).'_'.$teaching_staff->getClientOriginalName();

        $dtUpload = new Teacher;
        $dtUpload->nip = $request->nip;
        $dtUpload->fullname = $request->fullname;
        $dtUpload->position = $request->position;
        $dtUpload->google_scholar = $request->google_scholar;
        $dtUpload->phone = $request->phone;
        $dtUpload->email = $request->email;
        $dtUpload->address = $request->address;
        $dtUpload->facebook = $request->facebook;
        $dtUpload->instagram = $request->instagram;
        $dtUpload->picture = $namafile;

        $teaching_staff->move(public_path().'/img/teacher', $namafile);
        $dtUpload->save();


        return redirect('admin/teacher')->with('toast_success', 'Data Added Successfully');
    }

    public function update(Request $request, $id_teaching_staff)
    {
        $this->validate($request, [
            'nip' => 'required',
            'fullname' => 'required',
            'position' => 'required',
            'google_scholar' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'address' => 'required',
            'facebook' => 'required',
            'instagram' => 'required',
            'picture' => 'required|file|image|mimes:jpeg,jpg,png|max:1024',
        ]);

        $teaching_staff = Teacher::findorfail($id_teaching_staff);
        $gambarAwal = Date('His').round(1,999).'_'.$teaching_staff->picture;

        $data = [
            'nip' => $request['nip'],
            'fullname' => $request['fullname'],
            'position' => $request['position'],
            'google_scholar' => $request['google_scholar'],
            'phone' => $request['phone'],
            'email' => $request['email'],
            'address' => $request['address'],
            'facebook' => $request['facebook'],
            'instagram' => $request['instagram'],
            'picture' => $gambarAwal,
        ];

        $request->picture->move(public_path().'/img/teacher', $gambarAwal);
        $teaching_staff->update($data);
        return redirect('admin/teacher')->with('toast_success', 'Data Updated Successfully');
    }

    public function destroy($id_teaching_staff)
    {
        $teaching_staff = Teacher::findorfail($id_teaching_staff);

        $file = public_path('/img/teacher/').$teaching_staff->picture;
        if (file_exists($file)) {
            @unlink($file);
        }
        $teaching_staff->delete();
        return back()->with('toast_success', 'Data Deleted Successfully');;
    }
}

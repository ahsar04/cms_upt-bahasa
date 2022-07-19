<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }
    public function index(){
        $admin = User::where('roles', 'ADMIN')->orderBy('id', 'desc')->get();
        return view('pages.admin.administrator.administrator', compact('admin'));
    }
    public function detail($id){
        $admin = User::findorfail($id);
        return view('pages.admin.administrator.detail', compact('admin'));
    }

    public function update($id, Request $request)
    {
        // dd($request->all());
        $this->validate($request,[
            'name' => ['required', 'string', 'max:255'],
            'place_of_birth' => ['required', 'string', 'max:20'],
            'date_of_birth' => ['required', 'string', 'max:10'],
            'last_education' => ['required', 'string', 'max:10'],
            'phone' => ['required', 'string', 'max:13'],
            'address' => ['required', 'string'],
            'pas_photo' => ['file','image','mimes:jpeg,jpg,png','max:1024',],
            'identity_card' => ['file','image','mimes:jpeg,jpg,png','max:1024',]
        ]);
        
        $users = User::findorfail($id);
        if ($request->pas_photo==null&&$request->identity_card==null) {
            $data=[
            'name' => $request['name'],
            'place_of_birth' => $request['place_of_birth'],
            'date_of_birth' => $request['date_of_birth'],
            'last_education' => $request['last_education'],
            'phone' => $request['phone'],
            'address' => $request['address'],
            
            ];  
        }elseif ($request->pas_photo==null) {
        $namafile2 = date('His').Str::random(10).".".$request->identity_card->extension();
            $data=[
            'name' => $request['name'],
            'place_of_birth' => $request['place_of_birth'],
            'date_of_birth' => $request['date_of_birth'],
            'last_education' => $request['last_education'],
            'phone' => $request['phone'],
            'address' => $request['address'],
            'identity_card' => $namafile2,
            
        ];
        $request->identity_card->move(public_path().'/img/users', $namafile2);
        }elseif($request->identity_card==null){
        $namafile = date('His').Str::random(10).".".$request->pas_photo->extension();
            $data=[
            'name' => $request['name'],
            'place_of_birth' => $request['place_of_birth'],
            'date_of_birth' => $request['date_of_birth'],
            'last_education' => $request['last_education'],
            'phone' => $request['phone'],
            'address' => $request['address'],
            'pas_photo' => $namafile,
            
        ];
        $request->pas_photo->move(public_path().'/img/users', $namafile);
        }else{
        $namafile = date('His').Str::random(10).".".$request->pas_photo->extension();
        $namafile2 = date('His').Str::random(10).".".$request->identity_card->extension();
            $data=[
            'name' => $request['name'],
            'place_of_birth' => $request['place_of_birth'],
            'date_of_birth' => $request['date_of_birth'],
            'last_education' => $request['last_education'],
            'phone' => $request['phone'],
            'address' => $request['address'],
            'pas_photo' => $namafile,
            'identity_card' => $namafile2,
            
        ];
        $request->pas_photo->move(public_path().'/img/users', $namafile);
        $request->identity_card->move(public_path().'/img/users', $namafile2);
        }
        $users->update($data);
        return redirect('admin/dashboard')->with('toast_success', 'Data Updated Successfully');

    }

    public function destroy($id)
    {
        if (Auth::user()->id==$id) {
            return back()->with('toast_warning', "Data Can't Be Deleted"); 
        }
        $admin = User::findorfail($id);
        $admin->delete();
        return back()->with('toast_success', 'Data Deleted Successfully');
    }
}

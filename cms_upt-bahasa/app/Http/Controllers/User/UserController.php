<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.user.dashboard');
    }

    public function edit(){
        return view('pages.user.profile.edit');
    }

    public function update($id, Request $request)
    {
        // dd($request->all());
        $this->validate($request,[
            'name' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'string', 'max:10'],
            'place_of_birth' => ['required', 'string', 'max:20'],
            'date_of_birth' => ['required', 'string', 'max:10'],
            'last_education' => ['required', 'string', 'max:10'],
            'phone' => ['required', 'string', 'max:13'],
            'address' => ['required', 'string'],
            'pas_photo' => ['file','image','mimes:jpeg,jpg,png','max:1024',],
            'identity_card' => ['file','image','mimes:jpeg,jpg,png','max:1024',]
        ]);
        // if ($request->pas_photo==null) {
        //     # code...
        // }elseif($request->identity_card==null){
            
        // }
        $userPhoto = $request['pas_photo'];
        $namafile = date('His').Str::random(10)."_".$userPhoto->getClientOriginalName();
        
        $userCard = $request['identity_card'];
        $namafile2 = date('His').Str::random(10)."_".$userCard->getClientOriginalName();
        $users = User::findorfail($id);
        // $gambarAwal = $users->picture;

        $data=[
            'name' => $request['name'],
            'gender' => $request['gender'],
            'place_of_birth' => $request['place_of_birth'],
            'date_of_birth' => $request['date_of_birth'],
            'last_education' => $request['last_education'],
            'phone' => $request['phone'],
            'address' => $request['address'],
            'pas_photo' => $namafile,
            'identity_card' => $namafile2,
        ];
        
        $userPhoto->move(public_path().'/img/users', $namafile);
        $userCard->move(public_path().'/img/users', $namafile2);
        $users->update($data);
        return redirect('dashboard')->with('toast_success', 'Data Updated Successfully');

    }
}

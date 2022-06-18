<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use routes\web;

class UserController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.user.dashboard');
    }

    public function edit(){
        return view('pages.user.profile.edit');
    }

    public function update(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'pas_photo' => 'required',
            'name' => 'required',
            'place_of_birth' => 'required',
            'date_of_birth' => 'required',
            'last_education' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'identity_card' => 'required',
        ]);

        $gambarAwal = 'coba';
        //$gambarAwal = $users->pas_photo;

        $data=[
            'pas_photo' => $gambarAwal,
            'name' => $request['name'],
            'place_of_birth' => $request['place_of_birth'],
            'date_of_birth' => $request['date_of_birth'],
            'last_education' => $request['last_education'],
            'phone' => $request['phone'],
            'address' => $request['address'],
            'identity_card' => $request['identity_card'],
        ];

        $request->pas_photo->move(public_path().'/img/user/profile', $gambarAwal);
        $users->update($data);
        return redirect('dashboard')->with('toast_success', 'Data Updated Successfully');
    }
}

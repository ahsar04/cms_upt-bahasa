<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
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

    public function update($id, Request $request)
    {
        $this->validate($request,[
            'name' => ['required', 'string', 'max:255'],
            // 'gender' => ['required', 'string', 'max:10'],
            'place_of_birth' => ['required', 'string', 'max:20'],
            'date_of_birth' => ['required', 'string', 'max:10'],
            'last_education' => ['required', 'string', 'max:10'],
            'phone' => ['required', 'string', 'max:13'],
            'address' => ['required', 'string'],
            'pas_photo' => ['required', 'string', 'max:255'],
            'identity_card' => ['required', 'string', 'max:255']
        ]);

        $users = User::findorfail($id);
        // $gambarAwal = $users->picture;

        $data=[
            'pas_photo' => 'coba.jpg',
            'name' => $request['name'],
            // 'gender' => $request['gender'],
            'place_of_birth' => $request['place_of_birth'],
            'date_of_birth' => $request['date_of_birth'],
            'last_education' => $request['last_education'],
            'phone' => $request['phone'],
            'address' => $request['address'],
            'identity_card' => $request['identity_card'],
        ];

        // $request->picture->move(public_path().'/img/user', $gambarAwal);
        $users->update($data);
        return redirect('dashboard')->with('toast_success', 'Data Updated Successfully');

    }
}

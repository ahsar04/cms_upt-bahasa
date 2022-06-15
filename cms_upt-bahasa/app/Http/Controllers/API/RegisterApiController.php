<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class RegisterApiController extends Controller
{
    public function register(Request $request) 
    {
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'gender' => ['required', 'string', 'max:10'],
            'place_of_birth' => ['required', 'string', 'max:20'],
            'date_of_birth' => ['required', 'string', 'max:10'],
            'last_education' => ['required', 'string', 'max:10'],
            'phone' => ['required', 'string', 'max:13'],
            'address' => ['required', 'string'],
            'pas_photo' => ['required', 'string', 'max:255'],
            'identity_card' => ['required', 'string', 'max:255'],
            'roles' => ['string', 'max:5'],
        ]);
        
        $data = $request->all();
        $user = User::create($data);
        if($user) {
            return $user;
        }

        return $request->all();
    }
}

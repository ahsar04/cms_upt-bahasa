<?php

namespace App\Http\Controllers\API;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;


class UserController extends Controller
{
    public function login(Request $request)
    {
        $this->validate($request,[
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8'],
        ]);
        // if (auth()->attempt($request->only('email','password'))) {
        //     $currentUser = auth()->user();
        //     return response()->json([
        //         "meta" => ["code"=>200,"status"=>"Success","message"=>'Authenticated'],
        //         "data"=>["access_token"=>$currentUser->api_token,'token_type'=>'Bearer','user'=>new UserResource($currentUser)]
        //     ]);
        // }
        $user = User::where('email',$request->email)->first();

        if ($user) {
            if (password_verify($request->password, $user->password)) {
                return response()->json([
                "meta" => ["code"=>200,"status"=>"Success","message"=>'Authenticated'],
                "data"=>["access_token"=>$user->api_token,'token_type'=>'Bearer','user'=>new UserResource($user)]
                ]);
            }
            return response()->json([
                    "meta" => ["code"=>404,"status"=>"Failed","message"=>'Wrong Password']
                ])->setStatusCode(404);
        }
        return response()->json([
                    "meta" => ["code"=>404,"status"=>"Failed","message"=>'Unregistered Email']
                ])->setStatusCode(404);
    }


    public function register(Request $request) 
    {

        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'gender' => ['required', 'string', 'max:10'],
            'place_of_birth' => ['required', 'string', 'max:20'],
            'date_of_birth' => ['required', 'string', 'max:10'],
            'last_education' => ['required', 'string', 'max:10'],
            'phone' => ['required', 'string', 'max:13'],
            'address' => ['required', 'string'],
            // 'pas_photo' => ['required', 'string', 'max:255'],
            // 'identity_card' => ['required', 'string', 'max:255'],
        ]);
        
        $user= User::Create([
        'name' => $request['name'],
        'email' => $request['email'],
        'password' => Hash::make($request['password']),
        'api_token' => rand(1,99).'|'.Str::random(77),
        'gender' => $request['gender'],
        'place_of_birth' => $request['place_of_birth'],
        'date_of_birth' => $request['date_of_birth'],
        'last_education' => $request['last_education'],
        'phone' => $request['phone'],
        'address' => $request['address'],
        // 'pas_photo' => $request['pas_photo'],
        // 'identity_card' => $request['identity_card'],
        'roles' => 'USER',

    ]);
    return response()->json([
        "meta" => ["code"=>200,"status"=>"Success","message"=>'Authenticated'],
        "data"=>["access_token"=>$user->api_token,'token_type'=>'Bearer','user'=>new UserResource($user)]
    ]);
    }

    public function me(Request $request)
    {
        $user = auth()->user();

        return new UserResource($user);
    }
}

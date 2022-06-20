<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::User;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'gender' => ['required', 'string', 'max:10'],
            'place_of_birth' => ['required', 'string', 'max:20'],
            'date_of_birth' => ['required', 'string', 'max:10'],
            'last_education' => ['required', 'string', 'max:10'],
            'phone' => ['required', 'string', 'max:13'],
            'address' => ['required', 'string'],
            'pas_photo' => 'required|file|image|mimes:jpeg,jpg,png|max:1024',
            'identity_card' => ['required', 'string', 'max:255'],
            // 'roles' => ['string', 'max:5'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(Request $request)
    {

        // dd($request->all());
        
        $user_photo = $request->pas_photo;
        $namafile = date('His').Str::random(10)."_".$user_photo->getClientOriginalName();
        $dtUpload = new User;
        $dtUpload->name = $request->name;
        $dtUpload->email = $request->email;
        $dtUpload->password = Hash::make($request->password);
        // $dtUpload->api_token = rand(1;99).'|'.Str::random(77);
        $dtUpload->gender = $request->gender;
        $dtUpload->place_of_birth = $request->place_of_birth;
        $dtUpload->date_of_birth = $request->date_of_birth;
        $dtUpload->last_education = $request->last_education;
        $dtUpload->phone = $request->phone;
        $dtUpload->address = $request->address;
        $dtUpload->pas_photo = $namafile;
        $dtUpload->identity_card = $request->identity_card;
            // 'roles' = $data->roles;
        
        $user_photo->move(public_path().'/img/users', $namafile);
        return $dtUpload->save();
    }
}

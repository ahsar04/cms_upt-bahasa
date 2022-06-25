<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::User;
    // public function __construct(Request $request)
    // {
    //     // if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
        
    //         $user = User::where('email', $request->email)->first();
    //         if ($user->roles == 'ADMIN') {
    //             return redirect()->route('admin');
    //         } else {
    //             return redirect()->route('dashboard');
    //         }
            

    //     // }else{
    //     //     return redirect()->route('login');
    //     // }
    // }
}

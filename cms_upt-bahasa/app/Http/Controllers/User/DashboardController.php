<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Training;
use routes\web;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }
    public function index(Request $request){
        $training = Training::all();
        return view('pages.user.dashboard', compact('training'));
    }

    public function register() 
    {
        return view('pages.user.profile.regtraining');
    }
}

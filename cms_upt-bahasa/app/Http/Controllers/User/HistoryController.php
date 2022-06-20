<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TrainingRegistration;
use Illuminate\Support\Facades\Auth;
use routes\web;
use DB;

class HistoryController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }
    
    public function index(Request $request){
        $training_registration = DB::table('training_registration')
                        ->join('users', 'users.id', '=', 'training_registration.id')
                        ->join('training', 'training.id_training', '=', 'training_registration.id_training')
                        ->where('users.id', Auth::user()->id)
                        ->get();
        return view('pages.user.history.history', compact('training_registration'));
    }
}

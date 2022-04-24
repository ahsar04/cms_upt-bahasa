<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TrainingController extends Controller
{
    public function index(Request $request){
        return view('pages.admin.training.training');
    }
    public function add(Request $request){
        return view('pages.admin.training.add');
    }
    public function edit(Request $request){
        return view('pages.admin.training.edit');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index(Request $request){
        return view('pages.admin.teacher.teacher');
    }
    public function add(Request $request){
        return view('pages.admin.teacher.add');
    }
    public function edit(Request $request){
        return view('pages.admin.teacher.edit');
    }
}

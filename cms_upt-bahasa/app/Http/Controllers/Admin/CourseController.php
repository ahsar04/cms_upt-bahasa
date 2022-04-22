<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(Request $request){
        return view('pages.admin.service.course.course');
    }
    public function add(Request $request){
        return view('pages.admin.service.course.add');
    }
    public function edit(Request $request){
        return view('pages.admin.service.course.edit');
    }
}

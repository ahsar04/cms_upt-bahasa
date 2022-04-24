<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index(Request $request){
        return view('pages.admin.schedule.schedule');
    }
    public function add(Request $request){
        return view('pages.admin.schedule.add');
    }
    public function edit(Request $request){
        return view('pages.admin.schedule.edit');
    }
}

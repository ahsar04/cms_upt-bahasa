<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use routes\web;
use DB;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }
    public function index(Request $request){
        $admin = DB::table('users')->Where('roles', 'ADMIN')->count();
        $users = DB::table('users')->Where('roles', 'USER')->count();
        $teaching_staff = DB::table('teaching_staff')->count();
        $news = DB::table('news')->count();
        $service = DB::table('service')->count();
        $training = DB::table('training')->count();
        $procedure = DB::table('procedure')->count();
        return view('pages.admin.dashboard', compact('admin', 'users', 'teaching_staff', 'news', 'service', 'training', 'procedure'));
    }
}

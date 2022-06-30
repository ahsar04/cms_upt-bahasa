<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use routes\web;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }
    public function index(){
        $admin = User::where('roles', 'ADMIN')->orderBy('id', 'desc')->get();
        return view('pages.admin.administrator.administrator', compact('admin'));
    }
    public function detail($id){
        $admin = User::findorfail($id);
        return view('pages.admin.administrator.detail', compact('admin'));
    }
    public function destroy($id)
    {
        $admin = User::findorfail($id);
        $admin->delete();
        return back()->with('toast_success', 'Data Deleted Successfully');;
    }
}

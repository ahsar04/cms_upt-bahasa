<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use routes\web;

class MemberController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }
    public function index(){
        $users = User::where('roles', 'USER')->get();
        return view('pages.admin.member.member', compact('users'));
    }
    public function destroy($id)
    {
        $users = User::findorfail($id);
        $users->delete();
        return back()->with('toast_success', 'Data Deleted Successfully');;
    }
}

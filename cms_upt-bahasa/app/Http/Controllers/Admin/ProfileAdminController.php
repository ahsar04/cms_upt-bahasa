<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use routes\web;

class ProfileAdminController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }
    public function index(Request $request){
        return view('pages.admin.profileadmin.profileadmin', [
            'users' => $request->user()
        ]);
    }
    public function update(Request $request)
    {
        $request->user()->update(
            $request->all()
        );
        return redirect('admin/dashboard')->with('toast_success', 'Data Updated Successfully');
    }
}

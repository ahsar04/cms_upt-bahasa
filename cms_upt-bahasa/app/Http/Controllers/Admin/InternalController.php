<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InternalController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request){
        return view('pages.admin.member.internal.internal ');
    }
    public function add(Request $request){
        return view('pages.admin.member.internal.add ');
    }
    public function edit(Request $request){
        return view('pages.admin.member.internal.edit ');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExternalController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }
    public function index(Request $request){
        return view('pages.admin.member.external.external');
    }
    public function add(Request $request){
        return view('pages.admin.member.external.add');
    }
    public function edit(Request $request){
        return view('pages.admin.member.external.edit');
    }
}

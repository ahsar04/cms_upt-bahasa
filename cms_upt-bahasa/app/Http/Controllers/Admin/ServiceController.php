<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(Request $request){
        return view('pages.admin.service.service');
    }
    public function add(Request $request){
        return view('pages.admin.service.add');
    }
    public function edit(Request $request){
        return view('pages.admin.service.edit');
    }
}

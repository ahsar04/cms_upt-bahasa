<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProcedureController extends Controller
{
    public function index(Request $request){
        return view('pages.admin.procedure.procedure');
    }
    public function add(Request $request){
        return view('pages.admin.procedure.add');
    }
    public function edit(Request $request){
        return view('pages.admin.procedure.edit');
    }
}

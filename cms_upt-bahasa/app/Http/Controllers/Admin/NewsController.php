<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(Request $request){
        return view('pages.admin.news.news');
    }
    public function add(Request $request){
        return view('pages.admin.news.add');
    }
    public function edit(Request $request){
        return view('pages.admin.news.edit');
    }
}

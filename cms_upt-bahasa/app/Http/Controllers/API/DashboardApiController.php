<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Training;

class DashboardApiController extends Controller
{
    public function index(){
        $training = Training::all();
        return response()->json(['message' => 'success', 'data' => $training]);
    }
}

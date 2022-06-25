<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\ServiceResource;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function show()
    {
        $service = Service::all();
        // return new ServiceResource($service);
        return response()->json([
        "meta" => ["code"=>200,"status"=>"Success","message"=>'Data berhasil diambil'],
        "data"=>["current_page"=>1,"service" => new ServiceResource($service)]
    ]);
    }
}

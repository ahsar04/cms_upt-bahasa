<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\NewsResource;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function show()
    {
        $news = News::all();
        // return new NewsResource($news);
        return response()->json([
        "meta" => ["code"=>200,"status"=>"Success","message"=>'Data berhasil diambil'],
        "data"=>["current_page"=>null,"news" => new NewsResource($news)]
    ]);
    }
}

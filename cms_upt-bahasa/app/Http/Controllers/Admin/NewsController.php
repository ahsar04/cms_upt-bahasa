<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use routes\web;

class NewsController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }
    public function index(){
        $news = News::all();
        return view('pages.admin.news.news', compact('news'));
    }
    public function add(){
        return view('pages.admin.news.add');
    }

    /** 
    * @param int $id_news
    * @return \Illuminate\Http\Response
    */
    public function edit($id_news){
        $news = News::findorfail($id_news);
        return view('pages.admin.news.edit', compact('news'));
    }

    public function store(Request $request)
    {
        $news = $request->picture;
        $namafile = $news->getClientOriginalName();

        $dtUpload = new News;
        $dtUpload->headline_news = $request->headline_news;
        $dtUpload->description_news = $request->description_news;
        $dtUpload->picture = $namafile;
        $dtUpload->author = $request->author;

        $news->move(public_path().'/img/news', $namafile);
        $dtUpload->save();

        return redirect('admin/news')->with('toast_success', 'Data Added Successfully');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param int $id_news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_news)
    {
        $news = News::findorfail($id_news);
        $gambarAwal = $news->picture;

        $data = [
            'headline_news' => $request['headline_news'],
            'description_news' => $request['description_news'],
            'picture' => $gambarAwal,
            'author' => $request['author'],
        ];

        $request->picture->move(public_path().'/img/news', $gambarAwal);
        $news->update($data);
        return redirect('admin/news')->with('toast_success', 'Data Updated Successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_news)
    {
        $news = News::findorfail($id_news);

        $file = public_path('/img/news/').$news->picture;
        if (file_exists($file)) {
            @unlink($file);
        }
        $news->delete();
        return back()->with('toast_success', 'Data Deleted Successfully');;
    }
}

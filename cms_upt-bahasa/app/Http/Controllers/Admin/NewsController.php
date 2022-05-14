<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use routes\web;

class NewsController extends Controller
{
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
        $request->validate([
            'headline_news' => 'required',
            'description_news' => 'required',
            'picture' => 'required',
            'author' => 'required',
        ]);

        News::create([
            'headline_news' => $request->headline_news,
            'description_news' => $request->description_news,
            'picture' => $request->picture,
            'author' => $request->author
        ]);

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
        $news->update($request->all());
        return redirect('admin/news')->with('toast_success', 'Data Updated Successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_news)
    {
        $news = News::findorfail($id_news);
        $news->delete();
        return back()->with('toast_success', 'Data Deleted Successfully');;
    }
}

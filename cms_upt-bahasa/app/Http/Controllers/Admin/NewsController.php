<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use routes\web;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }
    public function index(){
        $news = News::orderBy('id_news', 'desc')->get();
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
        $this->validate($request, [
            'headline_news' => 'required',
            'description_news' => 'required',
            'picture' => 'required|file|image|mimes:jpeg,jpg,png|max:1024',
            'author' => 'required',
        ]);

        $news = $request->picture;
        $namafile = date('His').Str::random(10).".".$news->extension();

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
        $this->validate($request, [
            'headline_news' => 'required',
            'description_news' => 'required',
            'picture' => 'file|image|mimes:jpeg,jpg,png|max:1024',
            'author' => 'required',
        ]);

        $news = News::findorfail($id_news);
        if ($request->picture==null) {
            $data = [
                'headline_news' => $request['headline_news'],
                'description_news' => $request['description_news'],
                // 'picture' => $newPict,
                'author' => $request['author'],
            ];
        }else{
            $newPict = date('His').Str::random(10).".".$request->picture->extension();
            $data = [
                'headline_news' => $request['headline_news'],
                'description_news' => $request['description_news'],
                'picture' => $newPict,
                'author' => $request['author'],
            ];
            $file = public_path('/img/news/').$news->picture;
            if (file_exists($file)) {
                @unlink($file);
            }
            $request->picture->move(public_path().'/img/news', $newPict);
        }
        
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

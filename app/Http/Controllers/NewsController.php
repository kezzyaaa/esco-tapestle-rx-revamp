<?php

namespace App\Http\Controllers;

use App\News;
use App\NewsCategory;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $newsCategories = NewsCategory::all()->where('is_activated', '=', 1);
        $news = new News();
        return view('dashboard.create-news',compact('news','newsCategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(News $news)
    {

        $news = News::create($this->validateRequest());
        $this->storeImage($news);
        return redirect('/dashboard/news/')->with('message','The news has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {


        $activeNews = News::current($slug)->get();

        if ($activeNews->isEmpty()) {
            return abort(404);
        }
        else
        {
            $newslist = News::orderBy('created_at', 'desc')->get();
            $Breadcrumb_banner =  'news.jpg';
            $page_title = 'Esco Pharma News';
            $breadcrumb_section = 'News';
            $breadcrumb_name = $activeNews->first()->title;
            $activeNewsSel = $activeNews->first();
            $recentNews = $newslist->except(['id', $activeNewsSel->id])->take(5);

            return view('news',compact('Breadcrumb_banner', 'page_title','breadcrumb_section', 'breadcrumb_name', 'activeNewsSel', 'recentNews'));
        }
    }

    public function showList()
    {

        $newslist = News::orderBy('created_at', 'desc')->get();
        // dd($newslist->first());
        return view('dashboard.show-news',compact('newslist'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        $newsCategories = NewsCategory::all()->where('is_activated', '=', 1);
        return view('dashboard.edit-news',compact('news','newsCategories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(News $news)
    {
        $news->update($this->validateRequest());
        $this->storeImage($news);
        return redirect('/dashboard/news/'.$news->id.'/edit')->with('message','The news have been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        News::destroy($id);
        return $id;
    }



    public function changeStatus(Request $request)
    {
        $News = News::find($request->news_id);
        $News->is_activated = $request->status;
        $News->save();

        return response()->json(['success'=>'Status change successfully.']);
    }


    private function  validateRequest()
    {
      return request()->validate([
        'slug' => 'required|min:3',
        'title' => 'required|min:3',
        'description' => 'required|min:3',
        'news_category_id' => 'required',
        'content' => '',
        'is_activated' => '',
        'canonical_link' => '',
        'meta_title' => 'required',
        'meta_keywords' => 'required',
        'meta_description' => 'required',
        'banner_img' => 'sometimes|file|image|max:2000',
      ],

      [
        'title.required' => 'The :attribute field is required.',
        'description.required' => 'The :attribute field is required.',
        'description.min' => 'The :attribute field should be 20 or more characters.',
        'meta_keywords.required' => 'The :attribute field is required.',
        'meta_description.required' => 'The :attribute field is required.',
        'banner_img.max' => 'The banner size should not exceed 2mb.',
        'meta_title.required' => 'The :attribute field is required.',
        // 'meta_title.max' => 'The :attribute field should be less than 65 chars',

      ]);

    }

    private function storeImage($news)
    {

        if(request()->hasFile('banner_img')){
            $news->update([
                'banner_img' => request()->banner_img->storeAs('images/news-banner/full',request()->file('banner_img')->getClientOriginalName(),'public'),
                'banner_thumb' => request()->banner_img->storeAs('images/news-banner/thumb',request()->file('banner_img')->getClientOriginalName(),'public'),
                'banner_img' => request()->file('banner_img')->getClientOriginalName(),
                'banner_thumb' => request()->file('banner_img')->getClientOriginalName(),

            ]);
            $image = Image::make('images/news-banner/thumb/'.$news->banner_img)->resize(450, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $image->save();
        }
    }

}

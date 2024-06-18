<?php

namespace App\Http\Controllers;

use App\NewsCategory;
use App\News;

use Illuminate\Http\Request;

class NewsCategoryController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\NewsCategory  $newsCategory
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {

        $activeNewsCat = NewsCategory::current($slug)->get();
        if ($activeNewsCat->isEmpty()) {
            return abort(404);
        }
        else
        {
            $activeNewsCatSel = $activeNewsCat->first();
            $newslist = News::where('news_category_id',$activeNewsCatSel->id)->where('is_activated', '=', 1)->orderBy('created_at', 'desc')->paginate(8);
            $Breadcrumb_banner =  'news.jpg';
            $page_title = 'Esco Pharma News';
            $breadcrumb_section = 'News';
            $breadcrumb_name = $activeNewsCat->first()->title;
            return view('newsCategory',compact('Breadcrumb_banner', 'page_title','breadcrumb_section', 'breadcrumb_name', 'activeNewsCatSel', 'newslist'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\NewsCategory  $newsCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(NewsCategory $newsCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\NewsCategory  $newsCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NewsCategory $newsCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\NewsCategory  $newsCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(NewsCategory $newsCategory)
    {
        //
    }
}

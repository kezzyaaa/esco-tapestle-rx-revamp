<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Solution;
use App\News;



class SearchController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search()
    {
        return view('search');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function find(Request $request)
    {

        switch ($request->get('filter')) {
            case 'news':
                $search = News::search($request->get('q'), null, true)->where('is_activated', '=', 1)->get();
                break;
            case 'products':
                $search = Product::search($request->get('q'), null, true)->where('is_activated', '=', 1)->get();
                break;
            case 'solutions':
                $search = Solution::search($request->get('q'), null, true)->where('is_activated', '=', 1)->with('parent')->get();
                break;

            default:
                $search = Product::search($request->get('q'), null, true)->where('is_activated', '=', 1)->get();
          }

        return $search;




    }
}


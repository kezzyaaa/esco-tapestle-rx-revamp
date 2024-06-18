<?php

namespace App\Http\Controllers;

use App\Solution;
use Illuminate\Http\Request;

class SolutionController extends Controller
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
     * @param  \App\Solution  $solution
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $activeSolution = Solution::current($slug)->get();
        if ($activeSolution->isEmpty()) {
            return abort(404);
        }
        else
        {
            //check if parent is activated
            // if (isset($activeSolution->first()->parent)?!$activeSolution->first()->parent->is_activated:0) {
            //     return abort(404);
            // }

            $layout = $activeSolution->first()->layout;
            $Breadcrumb_banner =  isset($activeSolution->first()->parent)? $activeSolution->first()->parent->banner_img:$activeSolution->first()->banner_img;
            $page_title = $activeSolution->first()->title;
            $breadcrumb_section = 'solutions';
            $breadcrumb_name = $activeSolution->first()->title;
            $activeSolutionSel = $activeSolution->first();
            $solutions = Solution::getparents()->get();
            $solution_childs = $activeSolutionSel->childSolutions->where('is_activated', '=', 1);
            // dd($solution_tags);

            $row_items_1 = [
              '1',
              '2',
              '3',
              '4',
              '5',
              '6',
              '7',
              '8'
            ];

            $row_items_2 = [
              '09',
              '10',
              '11',
              '12',
              '13',
              '14',
              '15',
              '16'
            ];

            $row_items_3 = [
              '17',
              '18',
              '19',
              '20',
              '21',
              '22',
              '23',
              '24'
            ];

            return view('solution',compact('Breadcrumb_banner', 'page_title','breadcrumb_section', 'breadcrumb_name', 'layout', 'activeSolutionSel', 'solutions','solution_childs',
          'row_items_1', 'row_items_2', 'row_items_3'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Solution  $solution
     * @return \Illuminate\Http\Response
     */
    public function edit(Solution $solution)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Solution  $solution
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Solution $solution)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Solution  $solution
     * @return \Illuminate\Http\Response
     */
    public function destroy(Solution $solution)
    {
        //
    }
}

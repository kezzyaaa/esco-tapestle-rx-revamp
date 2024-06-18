<?php

namespace App\Http\Controllers;

use App\ContainmentControl;
use App\Solution;
use App\News;
use App\Event;
use App\NewsCategory;

use Illuminate\Http\Request;
use Carbon\Carbon;

class indexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $arr_browsers = ["Opera", "Edge", "Chrome", "Safari", "Firefox", "MSIE", "Trident"];

        $agent = $_SERVER['HTTP_USER_AGENT'];

        $user_browser = '';
        foreach ($arr_browsers as $browser) {
            if (strpos($agent, $browser) !== false) {
                $user_browser = $browser;
                break;
            }
        }

        switch ($user_browser) {
            case 'MSIE':
                $user_browser = 'Internet Explorer';
                break;

            case 'Trident':
                $user_browser = 'Internet Explorer';
                break;

            case 'Edge':
                $user_browser = 'Microsoft Edge';
                break;
        }

        $newslist = News::all();
        $newscategories = NewsCategory::with('news')->get();
        $latest = $newslist->whereIn('id', [1, 2, 3]);
        // dd($product_containment);
        $today = Carbon::now();
        $upcomingevents = Event::upcomming($today)->take(3);
        $eventsTitle = 'UPCOMING EVENTS';
        if(count($upcomingevents) < 1){
            $upcomingevents = Event::previous($today)->sortByDesc('event_end')->take(3);
            $eventsTitle = 'PREVIOUS EVENTS';
        }


        $Containment_controls = ContainmentControl::all();
        $activeSolution = Solution::current('by-application')->get();
        $activeSolutionSel = $activeSolution->first();
        return view('home',compact( 'Containment_controls', 'activeSolutionSel', 'newscategories', 'upcomingevents', 'eventsTitle', 'user_browser'));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //
        return view('about.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

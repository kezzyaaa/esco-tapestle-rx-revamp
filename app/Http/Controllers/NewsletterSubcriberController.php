<?php

namespace App\Http\Controllers;

use App\NewsletterSubcriber;
use Illuminate\Http\Request;

class NewsletterSubcriberController extends Controller
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
        // dd($request);
        NewsletterSubcriber::create($this->validateRequest());
        return (['message' => 'task was successful', 'errors' => ['name'=>'no error']]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\NewsletterSubcriber  $newsletterSubcriber
     * @return \Illuminate\Http\Response
     */
    public function show(NewsletterSubcriber $newsletterSubcriber)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\NewsletterSubcriber  $newsletterSubcriber
     * @return \Illuminate\Http\Response
     */
    public function edit(NewsletterSubcriber $newsletterSubcriber)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\NewsletterSubcriber  $newsletterSubcriber
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NewsletterSubcriber $newsletterSubcriber)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\NewsletterSubcriber  $newsletterSubcriber
     * @return \Illuminate\Http\Response
     */
    public function destroy(NewsletterSubcriber $newsletterSubcriber)
    {
        //
    }

    private function validateRequest()
    {
      return request()->validate([
        'email' => 'required|email',
        'name' => 'required',
        'consent' => 'Accepted'
      ]);
    }


    public function messages()
    {
        return [
            'email.required' => 'A email is required',
            'name.required'  => 'A name is required',
            'consent.required'  => 'A consent is required',

        ];
    }


    public function showList()
    {

        $NewsletterSubcribers= NewsletterSubcriber::orderBy('created_at', 'desc')->get();
        // dd($newslist->first());

        return view('dashboard.show-newsletterSubscriber',compact('NewsletterSubcribers'));
    }


}

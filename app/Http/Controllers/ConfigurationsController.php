<?php

namespace App\Http\Controllers;

use App\Configurations;
use Illuminate\Http\Request;

class ConfigurationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // dd(url()->current());
        return view('home');
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
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $configurations = Configurations::first();
        // dd($configurations);
        return view('dashboard.edit-configurations',compact('configurations'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Configurations $Config)
    {
        $Config->update($this->validateRequest());
        // $this->storeImage($Config);
        return redirect('/dashboard/configurations')->with('message','The configurations have been updated');
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

    private function  validateRequest()
    {
      return request()->validate([
        'domain' => 'required|min:5',
        'language' => 'required|min:2',
        'meta_title' => 'required',
        'meta_description' => 'required',
        'meta_keywords' => 'required',
        'analytics' => 'required',

      ],

      [
        'domain.required' => 'The :attribute field is required.',
        'domain.min' => 'The :attribute field should be 5 or more characters.',
        'language.required' => 'The :attribute field is required.',
        'language.min' => 'The :attribute field should be 2 or more characters.',
        'meta_title.required' => 'The :attribute field is required.',
        'meta_keywords.required' => 'The :attribute field is required.',
        'meta_description.required' => 'The :attribute field is required.',
        'meta_keywords.required' => 'The :attribute field is required.',
        'analytics.required' => 'The :attribute field is required.',

      ]);

    }
}

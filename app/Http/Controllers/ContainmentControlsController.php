<?php

namespace App\Http\Controllers;

// use App\ProductContainmentControl;
use App\ContainmentControl;

use Illuminate\Http\Request;

class ContainmentControlsController extends Controller
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
     * @param  \App\Containment_controls  $containment_controls
     * @return \Illuminate\Http\Response
     */
    public function show(Containment_controls $containment_controls)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Containment_controls  $containment_controls
     * @return \Illuminate\Http\Response
     */
    public function edit(Containment_controls $containment_controls)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Containment_controls  $containment_controls
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Containment_controls $containment_controls)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Containment_controls  $containment_controls
     * @return \Illuminate\Http\Response
     */
    public function destroy(Containment_controls $containment_controls)
    {
        //
    }

    public function getContainmentControls()
    {
        $productContainmentControl = ContainmentControl::all();
        return $productContainmentControl;


    }


}

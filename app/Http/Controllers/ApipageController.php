<?php

namespace App\Http\Controllers;

use App\Models\apipage;
use Illuminate\Http\Request;

class ApipageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('apipage.index');
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
     * @param  \App\Models\apipage  $apipage
     * @return \Illuminate\Http\Response
     */
    public function show(apipage $apipage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\apipage  $apipage
     * @return \Illuminate\Http\Response
     */
    public function edit(apipage $apipage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\apipage  $apipage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, apipage $apipage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\apipage  $apipage
     * @return \Illuminate\Http\Response
     */
    public function destroy(apipage $apipage)
    {
        //
    }
}

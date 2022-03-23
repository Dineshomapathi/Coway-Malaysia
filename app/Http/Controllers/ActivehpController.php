<?php

namespace App\Http\Controllers;

use App\Models\Activehp;
use Illuminate\Http\Request;

class ActivehpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $activehp = Activehp::paginate(10);
        return view('activehp.index', compact('activehp'))->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('activehp.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Activehp::create([
            'year'=>$request->year,
            'value'=>$request->value,
        ]);
        return redirect()->route('activehp.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Activehp  $activehp
     * @return \Illuminate\Http\Response
     */
    public function show(Activehp $activehp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Activehp  $activehp
     * @return \Illuminate\Http\Response
     */
    public function edit(Activehp $activehp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Activehp  $activehp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Activehp $activehp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Activehp  $activehp
     * @return \Illuminate\Http\Response
     */
    public function destroy(Activehp $activehp)
    {
        //
    }

    public function getActivehp()
    {
        $activehp = Activehp::all();
        return $activehp;
    }
}

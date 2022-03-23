<?php

namespace App\Http\Controllers;

use App\Models\netsales;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NetsalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $netsales = netsales::paginate(10);
        return view('netsales.index', compact('netsales'))->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('netsales.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        netsales::create([
            'month'=>$request->month,
            'year'=>$request->year,
            'value'=>$request->value,
        ]);
        return redirect()->route('netsales.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\netsales  $netsales
     * @return \Illuminate\Http\Response
     */
    public function show(netsales $netsales)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\netsales  $netsales
     * @return \Illuminate\Http\Response
     */
    public function edit(netsales $netsales)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\netsales  $netsales
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, netsales $netsales)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\netsales  $netsales
     * @return \Illuminate\Http\Response
     */
    public function destroy(netsales $netsales)
    {
        //
    }

    public function getMonthlynetsales($year)
    {
        $monthlynetsales = netsales::where('year', '=', $year)->get();
        return $monthlynetsales;
    }

    public function getYearlynetsales()
    {
        $yearlynetsales = DB::select('SELECT YEAR,SUM(value) as value FROM netsales GROUP BY YEAR');
        return $yearlynetsales;
    }
}

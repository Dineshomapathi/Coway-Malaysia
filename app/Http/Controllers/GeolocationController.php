<?php

namespace App\Http\Controllers;

use App\Models\geolocation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GeolocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $geo = geolocation::paginate(10);
        return view('geolocations.index', compact('geo'))->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('geolocations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        geolocation::create([
            'type'=>$request->type,
            'description'=>$request->description,
            'name'=>$request->name,
            'state'=>$request->state,
            'district'=>$request->district,
            'address'=>$request->address,
            'address_latitude'=>$request->lat,
            'address_longitude'=>$request->lng
        ]);
        return redirect()->route('geolocations.index');
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        if($search != NULL){
            $geo = DB::table('geolocations')->where('name', 'like', '%'.$search.'%')->paginate(10);
            return view('geolocations.index', compact('geo'))->with('i', (request()->input('page', 1) - 1) * 10);
        }else{
            $geo = geolocation::paginate(10);
            return view('geolocations.index', compact('geo'))->with('i', (request()->input('page', 1) - 1) * 10);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\geolocation  $geolocation
     * @return \Illuminate\Http\Response
     */
    public function show(geolocation $geolocation)
    {
        return view('geolocations.show', compact('geolocation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\geolocation  $geolocation
     * @return \Illuminate\Http\Response
     */
    public function edit(geolocation $geolocation)
    {
        return view('geolocations.edit', compact('geolocation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\geolocation  $geolocation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, geolocation $geolocation)
    {
        $request->validate([
            'name' => 'required',
            'state'=> 'required',
            'district'=> 'required',
            'address'=> 'required',
        ]);
        $geolocation->update($request->all());

        return redirect()->route('geolocations.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\geolocation  $geolocation
     * @return \Illuminate\Http\Response
     */
    public function destroy(geolocation $geolocation)
    {
        $geolocation->delete();

        return redirect()->route('geolocations.index');
    }

    public function getLocation()
    {
        $geolocation = geolocation::all();
        return $geolocation;
    }
}

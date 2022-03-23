<?php

namespace App\Http\Controllers;

use App\Models\SOM;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SOMController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $SOM = SOM::paginate(10);
        return view('som.index', compact('SOM'))->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('som.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        SOM::create([
            'month'=>$request->month,
            'year'=>$request->year,
            'value'=>$request->value,
        ]);
        return redirect()->route('som.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SOM  $SOM
     * @return \Illuminate\Http\Response
     */
    public function show(SOM $SOM)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SOM  $SOM
     * @return \Illuminate\Http\Response
     */
    public function edit(SOM $SOM)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SOM  $SOM
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SOM $SOM)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SOM  $SOM
     * @return \Illuminate\Http\Response
     */
    public function destroy(SOM $SOM)
    {
        //
    }

    public function getSOM()
    {
        $year = "2020";
        
        if($year == "2006"){
            $count = SOM::where('year', '=', '2006')->sum('value');

            $data = [  
                "0"=> [ 
                    "Year"=> "2006",
                    "Value"=>  $count
                ]
            ];

            return $collection;
        }
        elseif($year == "2007"){
            $count = SOM::where('year', '=', '2006')->sum('value');
            $count1 = $count + SOM::where('year', '=', '2007')->sum('value');

            $data = [  
                        "0"=> [ 
                            "Year"=> "2006",
                            "Value"=>  $count
                        ],
                        "1"=> [ 
                            "Year"=> "2007",
                            "Value"=> $count1
                        ]
                    ];

            return response()->json($data, 200);
        }
        elseif($year == "2008"){
            $count = SOM::where('year', '=', '2006')->sum('value');
            $count1 = $count + SOM::where('year', '=', '2007')->sum('value');
            $count2 = $count1 + SOM::where('year', '=', '2008')->sum('value');

            $data = [  
                "0"=> [ 
                    "Year"=> "2006",
                    "Value"=>  $count
                ],
                "1"=> [ 
                    "Year"=> "2007",
                    "Value"=> $count1
                ],
                "2"=> [ 
                    "Year"=> "2008",
                    "Value"=> $count2
                ]
            ];


            return response()->json($data, 200);
        }
        elseif($year == "2009"){
            $count = SOM::where('year', '=', '2006')->sum('value');
            $count1 = $count + SOM::where('year', '=', '2007')->sum('value');
            $count2 = $count1 + SOM::where('year', '=', '2008')->sum('value');
            $count3 = $count2 + SOM::where('year', '=', '2009')->sum('value');

            $data = [  
                "0"=> [ 
                    "Year"=> "2006",
                    "Value"=>  $count
                ],
                "1"=> [ 
                    "Year"=> "2007",
                    "Value"=> $count1
                ],
                "2"=> [ 
                    "Year"=> "2008",
                    "Value"=> $count2
                ],
                "3"=> [ 
                    "Year"=> "2009",
                    "Value"=> $count3
                ]
            ];


            return response()->json($data, 200);
        }
        elseif($year == "2010"){
            $count = SOM::where('year', '=', '2006')->sum('value');
            $count1 = $count + SOM::where('year', '=', '2007')->sum('value');
            $count2 = $count1 + SOM::where('year', '=', '2008')->sum('value');
            $count3 = $count2 + SOM::where('year', '=', '2009')->sum('value');
            $count4 = $count3 + SOM::where('year', '=', '2010')->sum('value');

            $data = [  
                "0"=> [ 
                    "Year"=> "2006",
                    "Value"=>  $count
                ],
                "1"=> [ 
                    "Year"=> "2007",
                    "Value"=> $count1
                ],
                "2"=> [ 
                    "Year"=> "2008",
                    "Value"=> $count2
                ],
                "3"=> [ 
                    "Year"=> "2009",
                    "Value"=> $count3
                ],
                "4"=> [ 
                    "Year"=> "2010",
                    "Value"=> $count4
                ]
            ];


            return response()->json($data, 200);
        }
        elseif($year == "2011"){
            $count = SOM::where('year', '=', '2006')->sum('value');
            $count1 = $count + SOM::where('year', '=', '2007')->sum('value');
            $count2 = $count1 + SOM::where('year', '=', '2008')->sum('value');
            $count3 = $count2 + SOM::where('year', '=', '2009')->sum('value');
            $count4 = $count3 + SOM::where('year', '=', '2010')->sum('value');
            $count5 = $count4 + SOM::where('year', '=', '2011')->sum('value');

            $data = [  
                "0"=> [ 
                    "Year"=> "2006",
                    "Value"=>  $count
                ],
                "1"=> [ 
                    "Year"=> "2007",
                    "Value"=> $count1
                ],
                "2"=> [ 
                    "Year"=> "2008",
                    "Value"=> $count2
                ],
                "3"=> [ 
                    "Year"=> "2009",
                    "Value"=> $count3
                ],
                "4"=> [ 
                    "Year"=> "2010",
                    "Value"=> $count4
                ],
                "5"=> [ 
                    "Year"=> "2011",
                    "Value"=> $count5
                ]
            ];


            return response()->json($data, 200);
        }
        elseif($year == "2012"){
            $count = SOM::where('year', '=', '2006')->sum('value');
            $count1 = $count + SOM::where('year', '=', '2007')->sum('value');
            $count2 = $count1 + SOM::where('year', '=', '2008')->sum('value');
            $count3 = $count2 + SOM::where('year', '=', '2009')->sum('value');
            $count4 = $count3 + SOM::where('year', '=', '2010')->sum('value');
            $count5 = $count4 + SOM::where('year', '=', '2011')->sum('value');
            $count6 = $count5 + SOM::where('year', '=', '2012')->sum('value');

            $data = [  
                "0"=> [ 
                    "Year"=> "2006",
                    "Value"=>  $count
                ],
                "1"=> [ 
                    "Year"=> "2007",
                    "Value"=> $count1
                ],
                "2"=> [ 
                    "Year"=> "2008",
                    "Value"=> $count2
                ],
                "3"=> [ 
                    "Year"=> "2009",
                    "Value"=> $count3
                ],
                "4"=> [ 
                    "Year"=> "2010",
                    "Value"=> $count4
                ],
                "5"=> [ 
                    "Year"=> "2011",
                    "Value"=> $count5
                ],
                "6"=> [ 
                    "Year"=> "2012",
                    "Value"=> $count6
                ]
            ];


            return response()->json($data, 200);
        }
        elseif($year == "2013"){
            $count = SOM::where('year', '=', '2006')->sum('value');
            $count1 = $count + SOM::where('year', '=', '2007')->sum('value');
            $count2 = $count1 + SOM::where('year', '=', '2008')->sum('value');
            $count3 = $count2 + SOM::where('year', '=', '2009')->sum('value');
            $count4 = $count3 + SOM::where('year', '=', '2010')->sum('value');
            $count5 = $count4 + SOM::where('year', '=', '2011')->sum('value');
            $count6 = $count5 + SOM::where('year', '=', '2012')->sum('value');
            $count7 = $count6 + SOM::where('year', '=', '2013')->sum('value');
            

            $data = [  
                "0"=> [ 
                    "Year"=> "2006",
                    "Value"=>  $count
                ],
                "1"=> [ 
                    "Year"=> "2007",
                    "Value"=> $count1
                ],
                "2"=> [ 
                    "Year"=> "2008",
                    "Value"=> $count2
                ],
                "3"=> [ 
                    "Year"=> "2009",
                    "Value"=> $count3
                ],
                "4"=> [ 
                    "Year"=> "2010",
                    "Value"=> $count4
                ],
                "5"=> [ 
                    "Year"=> "2011",
                    "Value"=> $count5
                ],
                "6"=> [ 
                    "Year"=> "2012",
                    "Value"=> $count6
                ],
                "7"=> [ 
                    "Year"=> "2013",
                    "Value"=> $count7
                ]
            ];


            return response()->json($data, 200);
        }
        elseif($year == "2014"){
            $count = SOM::where('year', '=', '2006')->sum('value');
            $count1 = $count + SOM::where('year', '=', '2007')->sum('value');
            $count2 = $count1 + SOM::where('year', '=', '2008')->sum('value');
            $count3 = $count2 + SOM::where('year', '=', '2009')->sum('value');
            $count4 = $count3 + SOM::where('year', '=', '2010')->sum('value');
            $count5 = $count4 + SOM::where('year', '=', '2011')->sum('value');
            $count6 = $count5 + SOM::where('year', '=', '2012')->sum('value');
            $count7 = $count6 + SOM::where('year', '=', '2013')->sum('value');
            $count8 = $count7 + SOM::where('year', '=', '2014')->sum('value');

            $data = [  
                "0"=> [ 
                    "Year"=> "2006",
                    "Value"=>  $count
                ],
                "1"=> [ 
                    "Year"=> "2007",
                    "Value"=> $count1
                ],
                "2"=> [ 
                    "Year"=> "2008",
                    "Value"=> $count2
                ],
                "3"=> [ 
                    "Year"=> "2009",
                    "Value"=> $count3
                ],
                "4"=> [ 
                    "Year"=> "2010",
                    "Value"=> $count4
                ],
                "5"=> [ 
                    "Year"=> "2011",
                    "Value"=> $count5
                ],
                "6"=> [ 
                    "Year"=> "2012",
                    "Value"=> $count6
                ],
                "7"=> [ 
                    "Year"=> "2013",
                    "Value"=> $count7
                ],
                "8"=> [ 
                    "Year"=> "2014",
                    "Value"=> $count8
                ]
            ];


            return response()->json($data, 200);
        }
        elseif($year == "2015"){
            $count = SOM::where('year', '=', '2006')->sum('value');
            $count1 = $count + SOM::where('year', '=', '2007')->sum('value');
            $count2 = $count1 + SOM::where('year', '=', '2008')->sum('value');
            $count3 = $count2 + SOM::where('year', '=', '2009')->sum('value');
            $count4 = $count3 + SOM::where('year', '=', '2010')->sum('value');
            $count5 = $count4 + SOM::where('year', '=', '2011')->sum('value');
            $count6 = $count5 + SOM::where('year', '=', '2012')->sum('value');
            $count7 = $count6 + SOM::where('year', '=', '2013')->sum('value');
            $count8 = $count7 + SOM::where('year', '=', '2014')->sum('value');
            $count9 = $count8 + SOM::where('year', '=', '2015')->sum('value');

            $data = [  
                "0"=> [ 
                    "Year"=> "2006",
                    "Value"=>  $count
                ],
                "1"=> [ 
                    "Year"=> "2007",
                    "Value"=> $count1
                ],
                "2"=> [ 
                    "Year"=> "2008",
                    "Value"=> $count2
                ],
                "3"=> [ 
                    "Year"=> "2009",
                    "Value"=> $count3
                ],
                "4"=> [ 
                    "Year"=> "2010",
                    "Value"=> $count4
                ],
                "5"=> [ 
                    "Year"=> "2011",
                    "Value"=> $count5
                ],
                "6"=> [ 
                    "Year"=> "2012",
                    "Value"=> $count6
                ],
                "7"=> [ 
                    "Year"=> "2013",
                    "Value"=> $count7
                ],
                "8"=> [ 
                    "Year"=> "2014",
                    "Value"=> $count8
                ],
                "9"=> [ 
                    "Year"=> "2015",
                    "Value"=> $count9
                ]
            ];


            return response()->json($data, 200);
        }
        elseif($year == "2016"){
            $count = SOM::where('year', '=', '2006')->sum('value');
            $count1 = $count + SOM::where('year', '=', '2007')->sum('value');
            $count2 = $count1 + SOM::where('year', '=', '2008')->sum('value');
            $count3 = $count2 + SOM::where('year', '=', '2009')->sum('value');
            $count4 = $count3 + SOM::where('year', '=', '2010')->sum('value');
            $count5 = $count4 + SOM::where('year', '=', '2011')->sum('value');
            $count6 = $count5 + SOM::where('year', '=', '2012')->sum('value');
            $count7 = $count6 + SOM::where('year', '=', '2013')->sum('value');
            $count8 = $count7 + SOM::where('year', '=', '2014')->sum('value');
            $count9 = $count8 + SOM::where('year', '=', '2015')->sum('value');
            $count10 = $count9 + SOM::where('year', '=', '2016')->sum('value');

            $data = [  
                "0"=> [ 
                    "Year"=> "2006",
                    "Value"=>  $count
                ],
                "1"=> [ 
                    "Year"=> "2007",
                    "Value"=> $count1
                ],
                "2"=> [ 
                    "Year"=> "2008",
                    "Value"=> $count2
                ],
                "3"=> [ 
                    "Year"=> "2009",
                    "Value"=> $count3
                ],
                "4"=> [ 
                    "Year"=> "2010",
                    "Value"=> $count4
                ],
                "5"=> [ 
                    "Year"=> "2011",
                    "Value"=> $count5
                ],
                "6"=> [ 
                    "Year"=> "2012",
                    "Value"=> $count6
                ],
                "7"=> [ 
                    "Year"=> "2013",
                    "Value"=> $count7
                ],
                "8"=> [ 
                    "Year"=> "2014",
                    "Value"=> $count8
                ],
                "9"=> [ 
                    "Year"=> "2015",
                    "Value"=> $count9
                ],
                "10"=> [ 
                    "Year"=> "2016",
                    "Value"=> $count10
                ]
            ];


            return response()->json($data, 200);
        }
        elseif($year == "2017"){
            $count = SOM::where('year', '=', '2006')->sum('value');
            $count1 = $count + SOM::where('year', '=', '2007')->sum('value');
            $count2 = $count1 + SOM::where('year', '=', '2008')->sum('value');
            $count3= $count2 + SOM::where('year', '=', '2009')->sum('value');
            $count4 = $count3 + SOM::where('year', '=', '2010')->sum('value');
            $count5 = $count4 + SOM::where('year', '=', '2011')->sum('value');
            $count6 = $count5 + SOM::where('year', '=', '2012')->sum('value');
            $count7 = $count6 + SOM::where('year', '=', '2013')->sum('value');
            $count8 = $count7 + SOM::where('year', '=', '2014')->sum('value');
            $count9 = $count8 + SOM::where('year', '=', '2015')->sum('value');
            $count10 = $count9 + SOM::where('year', '=', '2016')->sum('value');
            $count11 = $count10 + SOM::where('year', '=', '2017')->sum('value');

            $data = [  
                "0"=> [ 
                    "Year"=> "2006",
                    "Value"=>  $count
                ],
                "1"=> [ 
                    "Year"=> "2007",
                    "Value"=> $count1
                ],
                "2"=> [ 
                    "Year"=> "2008",
                    "Value"=> $count2
                ],
                "3"=> [ 
                    "Year"=> "2009",
                    "Value"=> $count3
                ],
                "4"=> [ 
                    "Year"=> "2010",
                    "Value"=> $count4
                ],
                "5"=> [ 
                    "Year"=> "2011",
                    "Value"=> $count5
                ],
                "6"=> [ 
                    "Year"=> "2012",
                    "Value"=> $count6
                ],
                "7"=> [ 
                    "Year"=> "2013",
                    "Value"=> $count7
                ],
                "8"=> [ 
                    "Year"=> "2014",
                    "Value"=> $count8
                ],
                "9"=> [ 
                    "Year"=> "2015",
                    "Value"=> $count9
                ],
                "10"=> [ 
                    "Year"=> "2016",
                    "Value"=> $count10
                ],
                "11"=> [ 
                    "Year"=> "2017",
                    "Value"=> $count11
                ]
            ];


            return response()->json($data, 200);
        }
        elseif($year == "2018"){
            $count = SOM::where('year', '=', '2006')->sum('value');
            $count1 = $count + SOM::where('year', '=', '2007')->sum('value');
            $count2 = $count1 + SOM::where('year', '=', '2008')->sum('value');
            $count3 = $count2 + SOM::where('year', '=', '2009')->sum('value');
            $count4 = $count3 + SOM::where('year', '=', '2010')->sum('value');
            $count5 = $count4 + SOM::where('year', '=', '2011')->sum('value');
            $count6 = $count5 + SOM::where('year', '=', '2012')->sum('value');
            $count7 = $count6 + SOM::where('year', '=', '2013')->sum('value');
            $count8 = $count7 + SOM::where('year', '=', '2014')->sum('value');
            $count9 = $count8 + SOM::where('year', '=', '2015')->sum('value');
            $count10 = $count9 + SOM::where('year', '=', '2016')->sum('value');
            $count11 = $count10 + SOM::where('year', '=', '2017')->sum('value');
            $count12 = $count11 + SOM::where('year', '=', '2018')->sum('value');

            $data = [  
                "0"=> [ 
                    "Year"=> "2006",
                    "Value"=>  $count
                ],
                "1"=> [ 
                    "Year"=> "2007",
                    "Value"=> $count1
                ],
                "2"=> [ 
                    "Year"=> "2008",
                    "Value"=> $count2
                ],
                "3"=> [ 
                    "Year"=> "2009",
                    "Value"=> $count3
                ],
                "4"=> [ 
                    "Year"=> "2010",
                    "Value"=> $count4
                ],
                "5"=> [ 
                    "Year"=> "2011",
                    "Value"=> $count5
                ],
                "6"=> [ 
                    "Year"=> "2012",
                    "Value"=> $count6
                ],
                "7"=> [ 
                    "Year"=> "2013",
                    "Value"=> $count7
                ],
                "8"=> [ 
                    "Year"=> "2014",
                    "Value"=> $count8
                ],
                "9"=> [ 
                    "Year"=> "2015",
                    "Value"=> $count9
                ],
                "10"=> [ 
                    "Year"=> "2016",
                    "Value"=> $count10
                ],
                "11"=> [ 
                    "Year"=> "2017",
                    "Value"=> $count11
                ],
                "12"=> [ 
                    "Year"=> "2018",
                    "Value"=> $count12
                ]
            ];


            return response()->json($data, 200);
        }
        elseif($year == "2019"){
            $count = SOM::where('year', '=', '2006')->sum('value');
            $count1 = $count + SOM::where('year', '=', '2007')->sum('value');
            $count2 = $count1 + SOM::where('year', '=', '2008')->sum('value');
            $count3 = $count2 + SOM::where('year', '=', '2009')->sum('value');
            $count4 = $count3 + SOM::where('year', '=', '2010')->sum('value');
            $count5 = $count4 + SOM::where('year', '=', '2011')->sum('value');
            $count6 = $count5 + SOM::where('year', '=', '2012')->sum('value');
            $count7 = $count6 + SOM::where('year', '=', '2013')->sum('value');
            $count8 = $count7 + SOM::where('year', '=', '2014')->sum('value');
            $count9 = $count8 + SOM::where('year', '=', '2015')->sum('value');
            $count10 = $count9 + SOM::where('year', '=', '2016')->sum('value');
            $count11 = $count10 + SOM::where('year', '=', '2017')->sum('value');
            $count12 = $count11 + SOM::where('year', '=', '2018')->sum('value');
            $count13 = $count12 + SOM::where('year', '=', '2019')->sum('value');

            $data = [  
                "0"=> [ 
                    "Year"=> "2006",
                    "Value"=>  $count
                ],
                "1"=> [ 
                    "Year"=> "2007",
                    "Value"=> $count1
                ],
                "2"=> [ 
                    "Year"=> "2008",
                    "Value"=> $count2
                ],
                "3"=> [ 
                    "Year"=> "2009",
                    "Value"=> $count3
                ],
                "4"=> [ 
                    "Year"=> "2010",
                    "Value"=> $count4
                ],
                "5"=> [ 
                    "Year"=> "2011",
                    "Value"=> $count5
                ],
                "6"=> [ 
                    "Year"=> "2012",
                    "Value"=> $count6
                ],
                "7"=> [ 
                    "Year"=> "2013",
                    "Value"=> $count7
                ],
                "8"=> [ 
                    "Year"=> "2014",
                    "Value"=> $count8
                ],
                "9"=> [ 
                    "Year"=> "2015",
                    "Value"=> $count9
                ],
                "10"=> [ 
                    "Year"=> "2016",
                    "Value"=> $count10
                ],
                "11"=> [ 
                    "Year"=> "2017",
                    "Value"=> $count11
                ],
                "12"=> [ 
                    "Year"=> "2018",
                    "Value"=> $count12
                ],
                "13"=> [ 
                    "Year"=> "2019",
                    "Value"=> $count13
                ]
            ];


            return response()->json($data, 200);
        }
        elseif($year == "2020"){
            $count = SOM::where('year', '=', '2006')->sum('value');
            $count1 = $count + SOM::where('year', '=', '2007')->sum('value');
            $count2 = $count1 + SOM::where('year', '=', '2008')->sum('value');
            $count3 = $count2 + SOM::where('year', '=', '2009')->sum('value');
            $count4 = $count3 + SOM::where('year', '=', '2010')->sum('value');
            $count5 = $count4 + SOM::where('year', '=', '2011')->sum('value');
            $count6 = $count5 + SOM::where('year', '=', '2012')->sum('value');
            $count7 = $count6 + SOM::where('year', '=', '2013')->sum('value');
            $count8 = $count7 + SOM::where('year', '=', '2014')->sum('value');
            $count9 = $count8 + SOM::where('year', '=', '2015')->sum('value');
            $count10 = $count9 + SOM::where('year', '=', '2016')->sum('value');
            $count11 = $count10 + SOM::where('year', '=', '2017')->sum('value');
            $count12 = $count11 + SOM::where('year', '=', '2018')->sum('value');
            $count13 = $count12 + SOM::where('year', '=', '2019')->sum('value');
            $count14 = $count13 + SOM::where('year', '=', '2020')->sum('value');

            $data = [  
                "0"=> [ 
                    "Year"=> "2006",
                    "Value"=>  $count
                ],
                "1"=> [ 
                    "Year"=> "2007",
                    "Value"=> $count1
                ],
                "2"=> [ 
                    "Year"=> "2008",
                    "Value"=> $count2
                ],
                "3"=> [ 
                    "Year"=> "2009",
                    "Value"=> $count3
                ],
                "4"=> [ 
                    "Year"=> "2010",
                    "Value"=> $count4
                ],
                "5"=> [ 
                    "Year"=> "2011",
                    "Value"=> $count5
                ],
                "6"=> [ 
                    "Year"=> "2012",
                    "Value"=> $count6
                ],
                "7"=> [ 
                    "Year"=> "2013",
                    "Value"=> $count7
                ],
                "8"=> [ 
                    "Year"=> "2014",
                    "Value"=> $count8
                ],
                "9"=> [ 
                    "Year"=> "2015",
                    "Value"=> $count9
                ],
                "10"=> [ 
                    "Year"=> "2016",
                    "Value"=> $count10
                ],
                "11"=> [ 
                    "Year"=> "2017",
                    "Value"=> $count11
                ],
                "12"=> [ 
                    "Year"=> "2018",
                    "Value"=> $count12
                ],
                "13"=> [ 
                    "Year"=> "2019",
                    "Value"=> $count13
                ],
                "14"=> [ 
                    "Year"=> "2020",
                    "Value"=> $count14
                ]
            ];


            return response()->json($data, 200);
        }
        elseif($year == "2021"){
            $count = SOM::where('year', '=', '2006')->sum('value');
            $count1 = $count + SOM::where('year', '=', '2007')->sum('value');
            $count2 = $count1 + SOM::where('year', '=', '2008')->sum('value');
            $count3 = $count2 + SOM::where('year', '=', '2009')->sum('value');
            $count4 = $count3 + SOM::where('year', '=', '2010')->sum('value');
            $count5 = $count4 + SOM::where('year', '=', '2011')->sum('value');
            $count6 = $count5 + SOM::where('year', '=', '2012')->sum('value');
            $count7 = $count6 + SOM::where('year', '=', '2013')->sum('value');
            $count8 = $count7 + SOM::where('year', '=', '2014')->sum('value');
            $count9 = $count8 + SOM::where('year', '=', '2015')->sum('value');
            $count10 = $count9 + SOM::where('year', '=', '2016')->sum('value');
            $count11 = $count10 + SOM::where('year', '=', '2017')->sum('value');
            $count12 = $count11 + SOM::where('year', '=', '2018')->sum('value');
            $count13 = $count12 + SOM::where('year', '=', '2019')->sum('value');
            $count14  = $count13 + SOM::where('year', '=', '2020')->sum('value');
            $count15 = $count14 + SOM::where('year', '=', '2021')->sum('value');

            $data = [  
                "0"=> [ 
                    "Year"=> "2006",
                    "Value"=>  $count
                ],
                "1"=> [ 
                    "Year"=> "2007",
                    "Value"=> $count1
                ],
                "2"=> [ 
                    "Year"=> "2008",
                    "Value"=> $count2
                ],
                "3"=> [ 
                    "Year"=> "2009",
                    "Value"=> $count3
                ],
                "4"=> [ 
                    "Year"=> "2010",
                    "Value"=> $count4
                ],
                "5"=> [ 
                    "Year"=> "2011",
                    "Value"=> $count5
                ],
                "6"=> [ 
                    "Year"=> "2012",
                    "Value"=> $count6
                ],
                "7"=> [ 
                    "Year"=> "2013",
                    "Value"=> $count7
                ],
                "8"=> [ 
                    "Year"=> "2014",
                    "Value"=> $count8
                ],
                "9"=> [ 
                    "Year"=> "2015",
                    "Value"=> $count9
                ],
                "10"=> [ 
                    "Year"=> "2016",
                    "Value"=> $count10
                ],
                "11"=> [ 
                    "Year"=> "2017",
                    "Value"=> $count11
                ],
                "12"=> [ 
                    "Year"=> "2018",
                    "Value"=> $count12
                ],
                "13"=> [ 
                    "Year"=> "2019",
                    "Value"=> $count13
                ],
                "14"=> [ 
                    "Year"=> "2020",
                    "Value"=> $count14
                ],
                "15"=> [ 
                    "Year"=> "2021",
                    "Value"=> $count15
                ]
            ];


            return response()->json($data, 200);
        }
        elseif($year == "2022"){
            $count = SOM::where('year', '=', '2006')->sum('value');
            $count1 = $count + SOM::where('year', '=', '2007')->sum('value');
            $count2 = $count1 + SOM::where('year', '=', '2008')->sum('value');
            $count3 = $count2 + SOM::where('year', '=', '2009')->sum('value');
            $count4 = $count3 + SOM::where('year', '=', '2010')->sum('value');
            $count5 = $count4 + SOM::where('year', '=', '2011')->sum('value');
            $count6 = $count5 + SOM::where('year', '=', '2012')->sum('value');
            $count7 = $count6 + SOM::where('year', '=', '2013')->sum('value');
            $count8 = $count7 + SOM::where('year', '=', '2014')->sum('value');
            $count9 = $count8 + SOM::where('year', '=', '2015')->sum('value');
            $count10 = $count9 + SOM::where('year', '=', '2016')->sum('value');
            $count11 = $count10 + SOM::where('year', '=', '2017')->sum('value');
            $count12 = $count11 + SOM::where('year', '=', '2018')->sum('value');
            $count13 = $count12 + SOM::where('year', '=', '2019')->sum('value');
            $count14 = $count13 + SOM::where('year', '=', '2020')->sum('value');
            $count15 = $count14 + SOM::where('year', '=', '2021')->sum('value');
            $count16 = $count15 + SOM::where('year', '=', '2022')->sum('value');

            $data = [  
                "0"=> [ 
                    "Year"=> "2006",
                    "Value"=>  $count
                ],
                "1"=> [ 
                    "Year"=> "2007",
                    "Value"=> $count1
                ],
                "2"=> [ 
                    "Year"=> "2008",
                    "Value"=> $count2
                ],
                "3"=> [ 
                    "Year"=> "2009",
                    "Value"=> $count3
                ],
                "4"=> [ 
                    "Year"=> "2010",
                    "Value"=> $count4
                ],
                "5"=> [ 
                    "Year"=> "2011",
                    "Value"=> $count5
                ],
                "6"=> [ 
                    "Year"=> "2012",
                    "Value"=> $count6
                ],
                "7"=> [ 
                    "Year"=> "2013",
                    "Value"=> $count7
                ],
                "8"=> [ 
                    "Year"=> "2014",
                    "Value"=> $count8
                ],
                "9"=> [ 
                    "Year"=> "2015",
                    "Value"=> $count9
                ],
                "10"=> [ 
                    "Year"=> "2016",
                    "Value"=> $count10
                ],
                "11"=> [ 
                    "Year"=> "2017",
                    "Value"=> $count11
                ],
                "12"=> [ 
                    "Year"=> "2018",
                    "Value"=> $count12
                ],
                "13"=> [ 
                    "Year"=> "2019",
                    "Value"=> $count13
                ],
                "14"=> [ 
                    "Year"=> "2020",
                    "Value"=> $count14
                ],
                "15"=> [ 
                    "Year"=> "2021",
                    "Value"=> $count15
                ],
                "16"=> [ 
                    "Year"=> "2022",
                    "Value"=> $count16
                ]
            ];


            return response()->json($data, 200);
        }
        elseif($year == "2023"){
            $count = SOM::where('year', '=', '2006')->sum('value');
            $count1 = $count + SOM::where('year', '=', '2007')->sum('value');
            $count2 = $count1 + SOM::where('year', '=', '2008')->sum('value');
            $count3 = $count2 + SOM::where('year', '=', '2009')->sum('value');
            $count4 = $count3 + SOM::where('year', '=', '2010')->sum('value');
            $count5 = $count4 + SOM::where('year', '=', '2011')->sum('value');
            $count6 = $count5 + SOM::where('year', '=', '2012')->sum('value');
            $count7 = $count6 + SOM::where('year', '=', '2013')->sum('value');
            $count8 = $count7 + SOM::where('year', '=', '2014')->sum('value');
            $count9 = $count8 + SOM::where('year', '=', '2015')->sum('value');
            $count10 = $count9 + SOM::where('year', '=', '2016')->sum('value');
            $count11 = $count10 + SOM::where('year', '=', '2017')->sum('value');
            $count12 = $count11 + SOM::where('year', '=', '2018')->sum('value');
            $count13 = $count12 + SOM::where('year', '=', '2019')->sum('value');
            $count14 = $count13 + SOM::where('year', '=', '2020')->sum('value');
            $count15 = $count14 + SOM::where('year', '=', '2021')->sum('value');
            $count16 = $count15 + SOM::where('year', '=', '2022')->sum('value');
            $count17 = $count16 + SOM::where('year', '=', '2023')->sum('value');

            $data = [  
                "0"=> [ 
                    "Year"=> "2006",
                    "Value"=>  $count
                ],
                "1"=> [ 
                    "Year"=> "2007",
                    "Value"=> $count1
                ],
                "2"=> [ 
                    "Year"=> "2008",
                    "Value"=> $count2
                ],
                "3"=> [ 
                    "Year"=> "2009",
                    "Value"=> $count3
                ],
                "4"=> [ 
                    "Year"=> "2010",
                    "Value"=> $count4
                ],
                "5"=> [ 
                    "Year"=> "2011",
                    "Value"=> $count5
                ],
                "6"=> [ 
                    "Year"=> "2012",
                    "Value"=> $count6
                ],
                "7"=> [ 
                    "Year"=> "2013",
                    "Value"=> $count7
                ],
                "8"=> [ 
                    "Year"=> "2014",
                    "Value"=> $count8
                ],
                "9"=> [ 
                    "Year"=> "2015",
                    "Value"=> $count9
                ],
                "10"=> [ 
                    "Year"=> "2016",
                    "Value"=> $count10
                ],
                "11"=> [ 
                    "Year"=> "2017",
                    "Value"=> $count11
                ],
                "12"=> [ 
                    "Year"=> "2018",
                    "Value"=> $count12
                ],
                "13"=> [ 
                    "Year"=> "2019",
                    "Value"=> $count13
                ],
                "14"=> [ 
                    "Year"=> "2020",
                    "Value"=> $count14
                ],
                "15"=> [ 
                    "Year"=> "2021",
                    "Value"=> $count15
                ],
                "16"=> [ 
                    "Year"=> "2022",
                    "Value"=> $count16
                ],
                "17"=> [ 
                    "Year"=> "2023",
                    "Value"=> $count17
                ]
            ];


            return response()->json($data, 200);
        }
        elseif($year == "2024"){
            $count = SOM::where('year', '=', '2006')->sum('value');
            $count1 = $count + SOM::where('year', '=', '2007')->sum('value');
            $count2 = $count1 + SOM::where('year', '=', '2008')->sum('value');
            $count3 = $count2 + SOM::where('year', '=', '2009')->sum('value');
            $count4 = $count3 + SOM::where('year', '=', '2010')->sum('value');
            $count5 = $count4 + SOM::where('year', '=', '2011')->sum('value');
            $count6 = $count5 + SOM::where('year', '=', '2012')->sum('value');
            $count7 = $count6 + SOM::where('year', '=', '2013')->sum('value');
            $count8 = $count7 + SOM::where('year', '=', '2014')->sum('value');
            $count9 = $count8 + SOM::where('year', '=', '2015')->sum('value');
            $count10 = $count9 + SOM::where('year', '=', '2016')->sum('value');
            $count11 = $count10 + SOM::where('year', '=', '2017')->sum('value');
            $count12 = $count11 + SOM::where('year', '=', '2018')->sum('value');
            $count13 = $count12 + SOM::where('year', '=', '2019')->sum('value');
            $count14 = $count13 + SOM::where('year', '=', '2020')->sum('value');
            $count15 = $count14 + SOM::where('year', '=', '2021')->sum('value');
            $count16 = $count15 + SOM::where('year', '=', '2022')->sum('value');
            $count17 = $count16 + SOM::where('year', '=', '2023')->sum('value');
            $count18 = $count17 + SOM::where('year', '=', '2024')->sum('value');

            $data = [  
                "0"=> [ 
                    "Year"=> "2006",
                    "Value"=>  $count
                ],
                "1"=> [ 
                    "Year"=> "2007",
                    "Value"=> $count1
                ],
                "2"=> [ 
                    "Year"=> "2008",
                    "Value"=> $count2
                ],
                "3"=> [ 
                    "Year"=> "2009",
                    "Value"=> $count3
                ],
                "4"=> [ 
                    "Year"=> "2010",
                    "Value"=> $count4
                ],
                "5"=> [ 
                    "Year"=> "2011",
                    "Value"=> $count5
                ],
                "6"=> [ 
                    "Year"=> "2012",
                    "Value"=> $count6
                ],
                "7"=> [ 
                    "Year"=> "2013",
                    "Value"=> $count7
                ],
                "8"=> [ 
                    "Year"=> "2014",
                    "Value"=> $count8
                ],
                "9"=> [ 
                    "Year"=> "2015",
                    "Value"=> $count9
                ],
                "10"=> [ 
                    "Year"=> "2016",
                    "Value"=> $count10
                ],
                "11"=> [ 
                    "Year"=> "2017",
                    "Value"=> $count11
                ],
                "12"=> [ 
                    "Year"=> "2018",
                    "Value"=> $count12
                ],
                "13"=> [ 
                    "Year"=> "2019",
                    "Value"=> $count13
                ],
                "14"=> [ 
                    "Year"=> "2020",
                    "Value"=> $count14
                ],
                "15"=> [ 
                    "Year"=> "2021",
                    "Value"=> $count15
                ],
                "16"=> [ 
                    "Year"=> "2022",
                    "Value"=> $count16
                ],
                "17"=> [ 
                    "Year"=> "2023",
                    "Value"=> $count17
                ],
                "18"=> [ 
                    "Year"=> "2024",
                    "Value"=> $count18
                ]
            ];


            return response()->json($data, 200);
        }
        elseif($year == "2025"){
            $count = SOM::where('year', '=', '2006')->sum('value');
            $count1 = $count + SOM::where('year', '=', '2007')->sum('value');
            $count2 = $count1 + SOM::where('year', '=', '2008')->sum('value');
            $count3 = $count2 + SOM::where('year', '=', '2009')->sum('value');
            $count4 = $count3 + SOM::where('year', '=', '2010')->sum('value');
            $count5 = $count4 + SOM::where('year', '=', '2011')->sum('value');
            $count6 = $count5 + SOM::where('year', '=', '2012')->sum('value');
            $count7 = $count6 + SOM::where('year', '=', '2013')->sum('value');
            $count8 = $count7 + SOM::where('year', '=', '2014')->sum('value');
            $count9 = $count8 + SOM::where('year', '=', '2015')->sum('value');
            $count10 = $count9 + SOM::where('year', '=', '2016')->sum('value');
            $count11 = $count10 + SOM::where('year', '=', '2017')->sum('value');
            $count12 = $count11 + SOM::where('year', '=', '2018')->sum('value');
            $count13 = $count12 + SOM::where('year', '=', '2019')->sum('value');
            $count14 = $count13 + SOM::where('year', '=', '2020')->sum('value');
            $count15 = $count14 + SOM::where('year', '=', '2021')->sum('value');
            $count16 = $count15 + SOM::where('year', '=', '2022')->sum('value');
            $count17 = $count16 + SOM::where('year', '=', '2023')->sum('value');
            $count18 = $count17 + SOM::where('year', '=', '2024')->sum('value');
            $count19 = $count18 + SOM::where('year', '=', '2025')->sum('value');

            $data = [  
                "0"=> [ 
                    "Year"=> "2006",
                    "Value"=>  $count
                ],
                "1"=> [ 
                    "Year"=> "2007",
                    "Value"=> $count1
                ],
                "2"=> [ 
                    "Year"=> "2008",
                    "Value"=> $count2
                ],
                "3"=> [ 
                    "Year"=> "2009",
                    "Value"=> $count3
                ],
                "4"=> [ 
                    "Year"=> "2010",
                    "Value"=> $count4
                ],
                "5"=> [ 
                    "Year"=> "2011",
                    "Value"=> $count5
                ],
                "6"=> [ 
                    "Year"=> "2012",
                    "Value"=> $count6
                ],
                "7"=> [ 
                    "Year"=> "2013",
                    "Value"=> $count7
                ],
                "8"=> [ 
                    "Year"=> "2014",
                    "Value"=> $count8
                ],
                "9"=> [ 
                    "Year"=> "2015",
                    "Value"=> $count9
                ],
                "10"=> [ 
                    "Year"=> "2016",
                    "Value"=> $count10
                ],
                "11"=> [ 
                    "Year"=> "2017",
                    "Value"=> $count11
                ],
                "12"=> [ 
                    "Year"=> "2018",
                    "Value"=> $count12
                ],
                "13"=> [ 
                    "Year"=> "2019",
                    "Value"=> $count13
                ],
                "14"=> [ 
                    "Year"=> "2020",
                    "Value"=> $count14
                ],
                "15"=> [ 
                    "Year"=> "2021",
                    "Value"=> $count15
                ],
                "16"=> [ 
                    "Year"=> "2022",
                    "Value"=> $count16
                ],
                "17"=> [ 
                    "Year"=> "2023",
                    "Value"=> $count17
                ],
                "18"=> [ 
                    "Year"=> "2024",
                    "Value"=> $count18
                ],
                "19"=> [ 
                    "Year"=> "2025",
                    "Value"=> $count19
                ]
            ];


            return response()->json($data, 200);
        }
    }

    public function getSOMMonthly($year)
    {
        $SOM = SOM::where('year', '=', $year)->get();
        return $SOM;
    }
}

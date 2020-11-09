<?php

namespace App\Http\Controllers;
use FarhanWazir\GoogleMaps\GMaps;
use App\Map;

use Illuminate\Http\Request;

class MapsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$gps= Map::all();
        //$gps= Map::where('vehicle_id', '0');
        //$gps= Map::all()->where('vehicle_id', 0);
        $gps= Map::all()->take(850);
         $gps0 = $gps->where('vehicle_id', 0);
         $gps5 = $gps->where('vehicle_id', 5);
         $gps4 = $gps->where('vehicle_id', 4);
        //$gps= Map::all()->pluck('lat','long');
        //echo $gps;

       // return response()->json($gps);
       //return view('maps.testpoly')->with('gps',$gps);

        //return view('maps.test_decimal')->with('gps',$gps);
        //return view('maps.testpoly')->with('gps',$gps);
         return view('maps.testpoly',['gps'=> $gps, 'gps0'=>$gps0, 'gps5'=>$gps5,'gps4'=>$gps4]);
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

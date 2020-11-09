<?php
use FarhanWazir\GoogleMaps\GMaps;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('maps.testpoly');
});

Route::get('/test1', function () {
    $config['zoom'] = '14';
    $config['map_height'] = '800px';
    $config['center']='LatLng(30.0599153,31.2620199,13)';

    $gmap = new GMaps();
    $gmap->initialize($config);
 
    // $marker['position'] = '{lat: {{$gps->lat}}, lng: {{$gps->long}}}';
    // $marker['infowindow_content'] = 'Faculty of Engineering,University of Ruhuna,Hapugala, Galle';
    // $gmap->add_marker($marker);

    $map = $gmap->create_map();
    return view('maps.map')->with('map',$map);
});
Route::resource('/test', 'MapsController');
Route::resource('/test_location', 'LocationsController');
//Route:resource('/test', 'MapsController');



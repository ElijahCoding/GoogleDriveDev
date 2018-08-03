<?php

namespace App\Http\Controllers\Maps;

use GMaps;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MapController extends Controller
{
    public function index()
    {
        $config['center'] = 'Air Canada Center, Toronto';
        $config['zoom'] = '14';
        $config['map_height'] = '500px';
        $config['geocodeCaching'] = true;
        $config['scrollwheel'] = false;

        $config['directions'] = true;
        $config['directionsStart'] = 'Air Canada Centre, Toronto';
        $config['directionsEnd'] = 'Yorkdale, Toronto';
        $config['directionsDivID'] = 'directionsDiv';

        GMaps::initialize($config);

        $marker['position'] = 'Air Canada Center, Toronto';
        $marker['infowindow_content'] = 'info about air canada';
        GMaps::add_marker($marker);

        $map = GMaps::create_map();

        return view('maps.index', compact('map'));
    }
}

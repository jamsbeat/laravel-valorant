<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Map;

class MapController extends Controller
{
    public function index()
    {
        $maps = Map::all();
    
            return view('maps.index', [
                'maps' => $maps
            ]);
    }

    public function showMaps($id) {
        $map = Map::find($id);
        return view('map-list', compact('map'));
    }
}
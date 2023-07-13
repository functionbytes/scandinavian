<?php

namespace App\Http\Controllers\Managers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Location;

class LocationsController extends Controller
{

    public function index(){

        $items = Location::get();

        return view('managers.views.locations.index')->with([
            'items' => $items,
        ]);

    }


}

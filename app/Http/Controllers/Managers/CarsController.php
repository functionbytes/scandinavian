<?php

namespace App\Http\Controllers\Managers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Car;

class CarsController extends Controller
{

    public function index(){

        $items = Car::get();

        return view('managers.views.cars.index')->with([
            'items' => $items,
        ]);

    }


    public function galery($id){

        $item = Car::findOrFail($id);

        return view('managers.views.cars.galery')->with([
            'car' => $item
        ]);

    }


}

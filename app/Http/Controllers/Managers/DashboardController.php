<?php

namespace App\Http\Controllers\Managers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Location;
use App\Models\Author;
use App\Models\Car;
use App\Models\Post;


class DashboardController extends Controller
{

    public function index(){

        $cars = Car::get();
        $authors = Author::get();
        $posts = Post::get();
        $locations = Location::get();


        return view('managers.views.dashboard.index')->with([
            'cars' => $cars,
            'authors' => $authors,
            'posts' => $posts,
            'locations' => $locations,
        ]);

    }

}

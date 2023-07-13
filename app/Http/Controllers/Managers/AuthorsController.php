<?php

namespace App\Http\Controllers\Managers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Author;

class AuthorsController extends Controller
{

    public function index(){

        $items = Author::get();

        return view('managers.views.authors.index')->with([
            'items' => $items,
        ]);

    }


    public function galery($id){

        $item = Author::findOrFail($id);

        return view('managers.views.authors.galery')->with([
            'author' => $item
        ]);

    }


}

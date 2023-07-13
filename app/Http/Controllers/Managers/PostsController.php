<?php

namespace App\Http\Controllers\Managers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Post;

class PostsController extends Controller
{

    public function index(){

        $items = Post::get();

        return view('managers.views.posts.index')->with([
            'items' => $items,
        ]);

    }


    public function galery($id){

        $item = Post::findOrFail($id);

        return view('managers.views.posts.galery')->with([
            'post' => $item
        ]);

    }


}

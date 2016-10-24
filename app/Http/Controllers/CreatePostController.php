<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\Post;

class CreatePostController extends Controller
{
    //
    public function save(Request $request)
    {
        $all=$request->all();
        Post::create($all);
        return view('post.createpost');
    }

    public function index()
    {

        return view('post.createpost');
    }

}

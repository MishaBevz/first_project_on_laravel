<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\Post;

class PostController extends Controller
{

    public function index(Post $postModel)
    {


        $posts=$postModel->getPublishedPosts();



        return view('post.index', ['posts'=>$posts]);
    }

    public function show($id)
    {
        $comments = Post::where('published','=',1)->find($id)->comments;
        $post=Post::find($id); //показываем статью если она опубликована
        return view('post.post',['post'=>$post,'comments'=>$comments]);
    }


}

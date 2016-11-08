<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\Post;

use App\User;
use App\Models\Comments;


class PostController extends Controller
{

    public function index(Post $postModel)
    {

        $posts=Post::where('published','=', 1)->paginate(2);
        $categories=Categories::all();
        $posts_for_categories = Post::all();



        return view('post.index', ['posts'=>$posts, 'categories'=>$categories, 'posts_for_categories'=>$posts_for_categories]);
    }

    public function show($id)
    {

        $users=User::all();
        $comments = Post::where('published','=',1)->find($id)->comments;
        $post=Post::find($id); //показываем статью если она опубликована
        return view('post.post',['post'=>$post,'comments'=>$comments, 'users'=>$users]);
    }


}

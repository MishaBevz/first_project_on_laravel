<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table="posts";
    protected $fillable=['title','slug','excerpt','image','content','published'];


    public function getPublishedPosts()
    {
        //$p=Post::all()->where('published','=>', true);
        $posts=Post::where('published','=', 1)->paginate(2);
            //->where('published','=>', true);



        return $posts;
    }

    public function comments()
    {
        return $this->hasMany('App\Models\Comments','post_id','id');
    }
}

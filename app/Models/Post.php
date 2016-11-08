<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table="posts";
    protected $fillable=['title','slug','excerpt','image','content','published','category_id'];



    public function comments()
    {
        return $this->hasMany('App\Models\Comments','post_id','id');
    }
}

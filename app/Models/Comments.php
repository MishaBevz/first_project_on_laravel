<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    //
    protected $table="comments";
    protected $fillable=['author','email','content','post_id'];

}

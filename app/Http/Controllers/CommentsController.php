<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\Comments;

class CommentsController extends Controller
{
    public function save(Request $request, $id)
    {
        $this->validate($request,[
            'author' => 'required|max:100|min:5',
            'email' => 'required|email',
            'content' => 'required|min:5|max:2000'
        ]);

        $all=$request->all();
        $all['post_id']=$id;
        Comments::create($all);
        return back()->with('message','Спасибо за комментарий.После проверки он будет опубликован');
    }
}

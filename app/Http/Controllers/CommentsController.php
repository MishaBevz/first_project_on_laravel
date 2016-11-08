<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\Comments;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Validator;
use App\User;


class CommentsController extends Controller
{
    public function save(Request $request, $id)
    {
        //$this->validate($request,[
            //'content' => 'required|min:5|max:2000'
       // ]);

        //$all=$request->all();
        //$all['post_id']=$id;
        //Comments::create($all);
        $input = Input::all();
        $rules = array(
            'content' => 'required|min:5|max:1000'
        );
        $validator = Validator::make($input,$rules);
        if($validator->fails()) {
            return $validator->errors();
        }
        if($validator->passes()) {
            $table = new Comments;
            $table->content=Input::get('content');
            $table->author=Auth::user()->name;

            $table->user_id=Auth::user()->id;
            //$table->avatar_comment=Auth::user()->avatar;
            $table->post_id=$id;
            $table->save();
            return back()->with('message','Спасибо за комментарий.');
        }
    }

    public function getUser(){




    }
}


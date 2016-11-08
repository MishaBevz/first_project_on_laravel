<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Categories;
use Illuminate\Support\Facades\Input;
use Validator;

class CategoriesController extends Controller
{
    public function store(){

        $input = Input::all();
        $rules = array(
            'title' => 'required',
        );

        $validator = Validator::make($input,$rules);
        if($validator->fails()) {
            return $validator->errors();
        }
        if($validator->passes()) {
            $newcategory = new Categories;
            $newcategory->title=Input::get('title');
            $newcategory->save();
            return back()->with('message','Категория добавлена');
        }
    }

    public function show(){
        $categories = Categories::all();
        return view('post.newcategory',['categories'=>$categories]);
    }

    public function index(Request $request){
        $categories = Categories::all();
        $posts = Post::all();
        return view('post.post_incategory',['categories'=>$categories,'posts'=>$posts]);

    }
}

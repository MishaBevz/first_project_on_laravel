<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\Post;
use Illuminate\Support\Facades\Redirect;

use Validator;
use Image;
use Illuminate\Support\Facades\Input;

class CreatePostController extends Controller
{
    //
    public function save(Request $request)
    {
        //$validation = Validator::make($request->all(), [
            //'title' => 'required',
            //'slug' => 'required',
            //'excerpt' => 'required',
            //'content' => 'required',
            //'image' => 'required|mimes:jpg,jpeg,png,bmp'
        //]);
        //if($validation->fails()){
            //return Redirect::to('createpost')->withErrors($validation);

        //}
        //else{

        $input = Input::all();
        $rules = array(
            'title' => 'required',
            'slug' => 'required',
            'excerpt' => 'required',
            'content' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png,bmp,gif'
        );

        $validator = Validator::make($input,$rules);
        if($validator->fails()) {
            return $validator->errors();
        }
        if($validator->passes()) {
            $post = new Post;
            $post->title=Input::get('title');
            $post->slug=Input::get('slug');
            $post->excerpt=Input::get('excerpt');
            $post->content=Input::get('content');
            $post->published=Input::get('published');

            if($request->hasFile('image')){
                $image = $request->file('image');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                Image::make($image)->resize(500, 500)->save(public_path('/img/post_image/'.$filename));
                $post->image = '/img/post_image/'.$filename;

            }
            $post->save();
            return view('post.createpost');
            //return Redirect::to('createpost')->with('success','Data submited');

        }
            //$all=$request->all();
            //$table->title=$request->Input('title');
            //$table->slug=$request->Input('slug');
            //$table->excerpt=$request->Input('excerpt');
            //$table->content=$request->Input('content');
            //$table->image=$request->Input('image');
            //$table->save();
            //Post::create($all);
            //

        //$all=$request->all();
        //Post::create($all);
        //return view('post.createpost');
    }

    public function index()
    {

        return view('post.createpost');
    }

}

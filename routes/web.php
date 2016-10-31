<?php


//Route::get('/', function () {
    //return view('welcome');
//});


Route::get('/', ['as' => 'posts', 'uses' => 'PostController@index']);

Route::get('/post/{id}','PostController@show');


Auth::routes();

Route::get('/home', 'HomeController@index');

Route::post('/post/{id}', 'CommentsController@save');


Route::post('createpost', 'CreatePostController@save');
Route::get('createpost', 'CreatePostController@index');

Route::get('feedback', 'FeedbackController@index');
Route::post('feedback', 'FeedbackController@sendEmailReminder');




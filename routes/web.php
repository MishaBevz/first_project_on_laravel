<?php


//Route::get('/', function () {
    //return view('welcome');
//});


Route::get('/', ['as' => 'posts', 'uses' => 'PostController@index']);



Route::get('test','TestController@test');


Auth::routes();

Route::get('/home', 'HomeController@index');

Route::post('/post/{id}', 'CommentsController@save');
Route::get('/post/{id}','PostController@show');


Route::post('createpost', 'CreatePostController@save');
Route::get('createpost', 'CreatePostController@show');


Route::get('feedback', 'FeedbackController@index');
Route::post('feedback', 'FeedbackController@sendEmailReminder');

Route::get('profile', 'UserController@profile');
Route::post('profile', 'UserController@update_avatar');

Route::get('newcategory', 'CategoriesController@show');
Route::post('newcategory','CategoriesController@store');
Route::get('postincategory', 'CategoriesController@index');




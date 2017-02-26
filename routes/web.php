<?php

Route::resource('articles', 'ArticleController');
Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('user/{id}', 'ArticleController@showUserArticles');

Route::post('articles/{id}/comment', [
    'as'   => 'articles.comment',
    'uses' => 'ArticleController@postComment'
]);

Route::get('image-upload', 'ImageController@index');
Route::post('store', 'ImageController@store');

Route::get('contact', 'ContactController@contact');
Route::post('contact', ['as'=>'contact.store','uses'=>'ContactController@contactPost']);

Route::get('show', 'ImageController@show');
/*
Route::get('upload', 'UploadsController@index');
Route::post('upload/uploadFiles', 'UploadsController@multiple_upload');
*/
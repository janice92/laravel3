<?php

Route::resource('articles', 'ArticleController');
Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('user/{id}', 'ArticleController@showUserArticles');

Route::post('articles/{id}/comment', [
    'as'   => 'articles.comment',
    'uses' => 'ArticleController@postComment'
]);

Route::get('image-upload-demo', 'ImageController@index');
Route::post('image-upload-demo', 'ImageController@upload');

Route::get('contact', 'ContactController@contact');
Route::post('contact', ['as'=>'contact.store','uses'=>'ContactController@contactPost']);


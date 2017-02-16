<?php

Route::resource('articles', 'ArticleController');
Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('user/{id}', 'ArticleController@showUserArticles');

Route::post('articles/{id}/comment', [
    'as'   => 'articles.comment',
    'uses' => 'ArticleController@postComment'
]);
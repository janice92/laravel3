<?php

Route::resource('articles', 'ArticleController');
Auth::routes();



Route::get('user/{id}', 'ArticleController@showUserArticles');

Route::resource('user', 'UserController');
Route::get('/user', 'UserController@index');
Route::get('/user.edit', 'UserController@edit');
Route::get('user.show', 'UserController@show');
Route::get('/user/create', 'UserController@create');
Route::post('user', 'UserController@store');
Route::put('/user/id', 'UserController@update');
Route::delete('/user.destroy', 'UserController@destroy');
            


Route::post('articles/{id}/comment', [
    'as'   => 'articles.comment',
    'uses' => 'ArticleController@postComment'
]);


Route::get('image-upload-demo', 'ImageController@index');
Route::post('image-upload-demo', 'ImageController@upload');



Route::get('/home', 'HomeController@index');
Route::get('/admin_home', 'AdminHomeController@index');

Route::get('admin_login','AdminAuth\LoginController@showLoginForm');
Route::post('admin_login','AdminAuth\LoginController@login');
Route::post('admin_logout','AdminAuth\LoginController@logout');
Route::post('admin_password/email','AdminAuth\ForgotPasswordController@sendResetLinkEmail ' );
Route::get('admin_password/reset','AdminAuth\ForgotPasswordController@showLinkRequestForm ' );
Route::post('admin_password/reset','AdminAuth\ResetPasswordController@reset');
Route::get('admin_password/reset/{token}','AdminAuth\ResetPasswordController@showResetForm');
Route::get('admin_register','AdminAuth\RegisterController@showRegistrationForm');
Route::post('admin_register','AdminAuth\RegisterController@register');

<?php

Route::get('/', function() {
    return view('welcome');
});
Route::get('about', 'PagesController@about');
Route::get('contact', 'PagesController@contact');
Route::post('contact', 'PagesController@mail');
Route::get('pages/profile/{id}', 'PagesController@user');
Route::post('pages/profile/store', 'PagesController@store');

Route::get('profiles/index/{id}', 'ProfilesController@index');
Route::post('profiles/index/{id}', 'ProfilesController@store');
Route::post('profiles/update', 'ProfilesController@update');
Route::post('/articles/{id}/like', 'LikesController@like');
Route::post('/articles/{id}/unlike', 'LikesController@unlike');
Route::post('/articles/{id}/comment', 'CommentsController@store');
Route::patch('/articles/{id}/comment/{commentid}', 'CommentsController@update');
Route::resource('articles', 'ArticlesController');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController'
]);

Route::get('/api/v1/url/article', 'UrlController@article');
Route::post('/api/v1/url/article', 'UrlController@create');
Route::post('/api/v1/url/profile', 'UrlController@createProfile');
Route::group(array('prefix' => 'api/v1'), function() {
    Route::resource('url', 'UrlController');
});
<?php

Route::get('/', function() {
    return view('welcome');
});
Route::get('about', 'PagesController@about');
Route::get('contact', 'PagesController@contact');
Route::get('pages/profile/{id}', 'PagesController@user');
Route::post('pages/profile/store', 'PagesController@store');

Route::get('profiles/index/{id}', 'ProfilesController@index');
Route::post('profiles/index/{id}', 'ProfilesController@store');
Route::post('profiles/update', 'ProfilesController@update');
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
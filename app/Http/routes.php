<?php

Route::get('/', function() {
    return view('welcome');
});
Route::get('about', 'PagesController@about');
Route::get('contact', 'PagesController@contact');
Route::get('pages/profile/{id}', 'PagesController@user');
Route::resource('articles', 'ArticlesController');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController'
]);
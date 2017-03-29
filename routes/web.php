<?php

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/success', function () {
    return view('success');
});

Route::get('/','SignupController@index' );

Route::post('/signup','SignupController@signup');
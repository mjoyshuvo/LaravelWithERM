<?php

Route::get('/', function () {
    return view('home');
});

//Get Bear

Route::get('/bear', [
	'uses'=> 'BearController@getBear',
	'as'=>'bear'
	]);
//Get Fish

Route::get('/fish', [
	'uses'=> 'FishController@getFish',
	'as'=>'fish'
	]);
//Get Trees

Route::get('/tree',[
	'uses' => 'TreeController@getTree',
	'as'=>'tree'
	]);

//Get Picnics
Route::get('/picnic',[
	'uses' =>'PicnicController@getPicnic',
	'as' => 'picnic'
	]);
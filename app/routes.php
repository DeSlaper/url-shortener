<?php

Route::get('/', [
	'as'   => 'home',
	'uses' => 'LinksController@create',
]);

Route::post('links', 'LinksController@store');
Route::get('{hash}', 'LinksContoller@translateHash');

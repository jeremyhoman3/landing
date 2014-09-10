<?php

Route::get('/', function()
{
	return View::make('home');
});

Route::post('/submit', 'HomeController@submit');

Route::get('/success', function() 
{
	return View::make('success');
});

Route::get('/contact', function ()
{
	return View::make('contact');
});
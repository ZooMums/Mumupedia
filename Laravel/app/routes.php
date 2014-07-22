<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::resource('/articles', function()
{
	return View::make('show');
});

Route::get('/class/{prenom}-{nom}', 'Matthieu\MonControlleur@prenom' );

Route::get('/prenom/{prenom}', function( $prenom )
{
	return View::make('matt')->with( 'prenom' , $prenom );
});

Route::get('/matt', function()
{
	return View::make('matt')->with('prenom','raphael');
});

Route::get('/', function()
{
	return "coucou";
});



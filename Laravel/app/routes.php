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



Route::get('/articles', 'ArticlesController@index' );
Route::get('/articles/create' , 'ArticlesController@create');
Route::get('/articles/delete/{id}' ,function($id){}, 'ArticlesController@delete');
Route::get('/articles/edit/{id}' ,function($id){} , 'ArticlesController@edit');
Route::get('/home' , 'HomeController@home');
Route::get('/Articles' , 'HomeController@index');
Route::get('/articles/show/{id}' , 'ArticlesController@show');
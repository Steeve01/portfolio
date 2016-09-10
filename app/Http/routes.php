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

use Illuminate\Support\Facades\Mail;

Route::get('/', ['as' => 'home',function()
{
	return view('home');
}]);
Route::get('/home', ['as' => 'home',function()
{
	return view('home');
}]);
Route::get('/contact', function()
{
	return view('contact');
});

Route::get('/Parcours',['as' => 'parcours', function()
{
	return view('parcours');
}]);

Route::get('/Realisations', ['as' => 'realisations',
														 'uses' => 'ProjetsController@index']);

Route::get('/CV', ['as' =>'cv', function()
{
	return view('cv');
}]);

Route::get('/backoffice', ['as' => 'backoffice', function()
{
	return view('backoffice');
}]);
Route::get('/connected', function()
{
	return view('connected');
});
Route::auth();

Route::get('/backoffice', 'HomeController@index');

Route::group([
  'prefix' => 'backoffice'], function(){
    //route en GET
		Route::get('/ajouter', ['as' => 'backoffice.ajouter',
														'middleware' => 'admin', function()
		{
		    return view('backoffice/ajouter');
		}]);
		Route::get('/editer', ['as' => 'backoffice.editer',
													'uses' => 'ProjetsController@indexEdit',
													'middleware' => 'admin', function()
		{
		    return view('backoffice/editer');
		}]);
		Route::get('/supprimer', ['as' => 'backoffice.supprimer',
															'uses' => 'ProjetsController@indexSupprimer',
															'middleware' => 'admin', function()
		{
		    return view('backoffice/supprimer');
		}]);
		Route::post('/storesup', ['as' => 'backoffice.storesup','uses'=>'ProjetsController@storesup']);
		Route::get('/editprojet{id}', ['as' => 'backoffice.editprojet',
																	'uses' => 'ProjetsController@indexEditProjet',
																	'middleware' => 'admin', function()
		{
				return view('backoffice/editprojet');
		}]);
		Route::resource('editprojet','ProjetsController');
		Route::post('/store', ['as' => 'backoffice.store','uses'=>'ProjetsController@edit']);
		});
		Route::post('/email', ['as' => 'email', 'uses'=>'mailController@send', function(){
		}]);
		Route::get('/pdf/{order}', ['as' => 'order.pdf', 'uses' => 'PdfController@orderPdf']);

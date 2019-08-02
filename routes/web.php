<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::resource('/','IndexController',[

										'only' =>['index'],
										'names' => ['index'=>'home']

										]);

Route::get('about',['uses'=>'AboutController@index','as'=>'about']);


Route::get('services',['uses'=>'ServicesController@index','as'=>'services']);


Route::get('portfolios',['uses'=>'PortfoliosController@index','as'=>'portfolios']);

Route::resource('/articles','ArticlesController',[

													'parameters'=> [

														'articles'=>'alias'

													]

												]);

Route::get('/articles/cat/{cat_alias?}',['uses'=>'ArticlesController@index','as'=>'articlesCat'])->where('cat_alias','[\w-]+');


Route::get('contacts/',['uses'=>'ContactController@index','as'=>'contacts']);
Route::post('contacts/',['uses'=>'ContactController@store','as'=>'contactsStore']);
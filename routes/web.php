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

Route::get('/', function () {
	if(Auth::guest()){
    	return view('welcome');
	}else{
		return redirect('/home');
	}
});


Route::resource('/category','KnowledgeBaseCategoryController');
Route::resource('/knowledgebase','KnowledgeBaseController');
Route::get('search/autocomplete', 'SearchKnowledgeBaseController@autocomplete');

Route::get('/test',function(){
	return view('dashboard.index2');
});
Route::get('/testa',function(){
	return view('dashboard.index3');
});

Route::get('lang/{lang}', ['as'=>'lang.switch', 'uses'=>'LanguageController@switchLang']);
Auth::routes();

Route::get('/home', function(){
	return redirect(action('\Kordy\Ticketit\Controllers\TicketsController@index'));
});

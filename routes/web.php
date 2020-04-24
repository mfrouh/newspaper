<?php

use Illuminate\Support\Facades\Route;

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

Route::resource('/category', 'CategoryController');
Route::get('/writers', 'PageController@writers');
Route::get('/writer/{id}', 'PageController@writer');
Route::get('/date/{date}', 'PageController@date');
Route::get('/tag/{tag}', 'PageController@tag');
Route::get('/search', 'PageController@search');
Route::post('/addviewarticle','PageController@addviewarticle');
Route::get('/social','AdminController@social');
Route::post('/social','AdminController@store');
Route::get('/social/edit','AdminController@create');
Route::get('/article/{article}/edit','ArticleController@edit');
Route::get('/article/{article}/{slug}','ArticleController@show');
Route::get('/article','ArticleController@index');
Route::get('/article/create','ArticleController@create');
Route::put('/article/{article}','ArticleController@update');
Route::post('/article','ArticleController@store');
Route::delete('/article/{article}','ArticleController@destroy');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/articles','AdminController@articles');
Auth::routes();
Route::get('/password/reset',function()
{
    abort(404);
});
Route::get('/register',function()
{
    abort(404);
});
Route::get('/','PageController@home');
Route::get('/createwriter','AdminController@createwriter');
Route::get('/saved/{id}','PageController@addsaved');
Route::post('/createwriter','AdminController@writer')->name('writered');
Route::post('/publisharticle','AdminController@publisharticle');
Route::post('/blockuser','AdminController@blockuser');
Route::get('/block','AdminController@block');

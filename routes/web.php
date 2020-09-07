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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/category/create', 'categoryController@create')->name('category.create');

Route::get('/category/index', 'categoryController@index')->name('category.index');


Route::get('/fast', function () {

	$ip = \Request::ip();
    $data = \Location::get($ip);
    dd($data);

});
Route::get('/category/edit{id}', 'categoryController@edit')->name('category.edit');
Route::get('/category/delete/{id}', 'categoryController@delete')->name('category.delete');
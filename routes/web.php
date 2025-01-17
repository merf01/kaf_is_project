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
    return view('index');
});
Route::get('/projectsPage', function () {
    return view('projectsPage');
});
//Route::resource("projects","ProjectController");
Route::resource("projects","ProjectController")->middleware('auth');
Auth::routes();
Route::post('upload', array('uses' => 'HomeController@uploadProjectImage'));

Route::get('/home', 'HomeController@index')->name('home');

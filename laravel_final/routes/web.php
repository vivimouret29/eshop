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

Route::get('/', 'WelcomeController@index')->name('accueil');

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('evenements', 'EvenementController');

Route::get('evenements/supprimer/{id}', [
    'as' => 'delete_event',
    'uses' => 'EvenementController@destroy'
]);

Route::get('user/{id}', 'UserController@show');

Route::get('audiosearch', 'PagesController@audiosearch')->name('audiosearch');

Route::get('howler', 'PagesController@howler')->name('howler');

Route::get('howler-update', 'PagesController@howler_update')->name('howler-update');

Auth::routes(['verify' => true]);
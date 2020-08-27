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

Route::get('/login/{provider}/redirect', 'SocialiteController@redirect')->name('social.login');
Route::get('/auth/{provider}/callback', 'SocialiteController@callback');


Route::post('/graduate/create', 'GraduateController@create')->middleware('auth')->name('create_graduate');

Route::group([ // Admin Route use middleware admin
    'middleware' => 'admin',
    'prefix' => 'admin'
], function(){
    
});

Route::get('lang/{lang}', ['as'=>'lang.switch', 'uses'=>'LanguageController@switchLang']);

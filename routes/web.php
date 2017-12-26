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
    return view('welcome');
})->name('home');

Route::get('/github', 'Site\GithubController@getView')->name('get_github');

Route::get('/ip', 'Site\IpController@getView')->name('get_ip');
Route::post('/ip', 'Site\IpController@getLocalInformation');

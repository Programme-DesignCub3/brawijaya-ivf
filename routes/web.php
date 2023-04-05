<?php

use TCG\Voyager\Facades\Voyager;
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

Route::get('/', 'IndexController@index');
Route::post('/', 'IndexController@store')
    ->name('storeMessage');

Route::get('/service', 'ServiceController@index');
Route::get('/why', 'WhyController@index');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

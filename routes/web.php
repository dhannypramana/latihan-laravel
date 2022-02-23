<?php

use Illuminate\Support\Facades\Route;
use function League\CommonMark\Reference\get;

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
    return view('login');
});

Route::get('/home', 'HelloController@home');

Route::get('/home/delete/{id}', 'HelloController@deleteData')->name('deleteData');
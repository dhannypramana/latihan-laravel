<?php

use Illuminate\Support\Facades\Route;
use function League\CommonMark\Reference\get;
use Illuminate\Http\Request;

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

Route::get('/home', 'HelloController@home')->name('back');
Route::get('/home/delete/{id}', 'HelloController@deleteData')->name('deleteData');

Route::get('/home/insert', 'HelloController@move_insert_page')->name('move_insert_page');
Route::get('/home/edit/{id}', 'HelloController@move_edit_page')->name('move_edit_page');

Route::post('/home/insert', 'HelloController@insertData')->name('insertData');
Route::post('/home/edit/{id}', 'HelloController@editData')->name('editData');
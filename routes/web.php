<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentController;
use App\Http\Controllers\memberController;

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

route::get('userview','studentController@listStudents');
route::view('add','addStudent');
route::post('create','studentController@addStudent');
route::view('update','update');
route::post('update','studentController@update');
route::view('delete','delete');
route::post('delete','studentController@delete');

route::get('/mem','memberController@insertcomment');
route::get('/get','memberController@onetomany');
route::get('/getrole','memberController@manytomany');




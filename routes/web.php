<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\mycontroller;

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

Route::any('insertRead','FormController@index');

Route::any('insertData',[mycontroller::class,'insert']);

Route::any('insertRead',[mycontroller::class,'readdata']);

Route::any('deleteData/{Id}',[mycontroller::class,'deletedata']);

Route::any('editData/{Id}',[mycontroller::class,'editpage']);

Route::any('/update', 'FormController@index');




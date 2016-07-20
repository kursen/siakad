<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('layouts.master');
});


Route::get('matakuliah','MataKuliah@index');
Route::get('/getall', 'MataKuliah@getall');
Route::post('/create','MataKuliah@create');
//getdatatable matakuliah
Route::controller('datatables', 'MataKuliah', [
    'getData'  => 'datatables.data',
    'getIndex' => 'datatables',
]);

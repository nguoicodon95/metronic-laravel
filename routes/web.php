<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('admin.index');
});

Route::get('/table/basic', function () {
    return view('admin.table_basic');
});

Route::get('/table/tree', function () {
    return view('admin.table_tree');
});

Route::get('/table/responsive', function () {
    return view('admin.table_responsive');
});

Route::get('/table/managed', function () {
    return view('admin.table_managed');
});

Route::get('/table/editable', function () {
    return view('admin.table_editable');
});

Route::get('/table/advanced', function () {
    return view('admin.table_advanced');
});

Route::get('/table/ajax', function () {
    return view('admin.table_ajax');
});

Route::get('/table/tree/ajax', 'ActionTableController@treeTable');
Route::post('/table/ajax', 'ActionTableController@ajaxTable');

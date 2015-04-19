<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
    return View::make('index');
});

Route::get('/parts', function()
{
    return View::make('parts');
});
//Route::get('/searchResult', function () {
//    $data = DB::table('acc_items')->get();
//    return Response::json(array('success'=>true,'records'=>$data));
//    //return $data;
//});

Route::get('/searchResult', 'SearchResult@getAllData');

// ****************Admin****************

Route::get('/admin', function()
{
    return View::make('admin/index');
});

Route::post('/update', 'Admin@update');
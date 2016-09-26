<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function ()
{
    return view('index');
});

$app->get('/notices', 'NoticeController@index');

$app->get('/notice/{id}', 'NoticeController@show');

$app->post('/notice/create', 'NoticeController@store');

$app->post('/notice/edit/{id}', 'NoticeController@update');

$app->post('/notice/delete', 'NoticeController@destroy');

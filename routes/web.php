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
});

Route::get('/assignments/{assignment}', 'AssignmentController@show');

Route::get('/assignments/pwgenerator/generate', 'WordArrayController@generate');

Route::get('/assignments/piglatin/translate', 'PigLatinController@translate');

//Route::get('/generate', 'AssignmentController@generate');

//Route::get('/translate', 'AssignmentController@translate');

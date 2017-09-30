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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//Projects
Route::get('/projects', 'ProjectController@index');
Route::get('/projects/create', 'ProjectController@create');
Route::post('/projects', 'ProjectController@store');
Route::get('/projects/{project}/edit', 'ProjectController@edit');
Route::put('/projects/{project}', 'ProjectController@update');
Route::get('/projects/{project}/delete', 'ProjectController@destroy');
Route::get('/projects/{project}/tasks', 'ProjectController@tasks');


//Tasks
Route::get('/tasks', 'TaskController@index');
Route::get('/tasks/create', 'TaskController@create');
Route::post('tasks', 'TaskController@store');
Route::get('/tasks/{task}/edit', 'TaskController@edit');
Route::put('/tasks/{task}', 'TaskController@update');
Route::get('/tasks/{task}/delete', 'TaskController@destroy');


//UserTaskLog
Route::resource('usertasklogs', 'UserTaskLogController');

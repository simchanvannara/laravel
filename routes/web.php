<?php

Use App\Task;
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
    $tasks = Task::all();

    return view('welcome', compact('tasks'));
});

Route::get('/task/{id}', function($id){
    $tasks = Task::find($id);
    return view('tasks.detail', compact('tasks'));
});

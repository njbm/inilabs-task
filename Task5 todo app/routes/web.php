<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('todo');
});

Route::post('/todolistinserts/{food_name}', [TodoController::class, 'todolistinsert']);
Route::get('/getdata', [TodoController::class, 'getdata']);
Route::get('/deletedata/{id}', [TodoController::class, 'deletedata']);
Route::get('/editdata/{id}', [TodoController::class, 'editdata']);
Route::post('/todolistupdate/{food_name}/{id}', [TodoController::class, 'todolistupdate']);

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoItemController;
use App\Http\Controllers\TodoGroupController;
use App\Http\Controllers\MasterController;


Route::resource('todo-groups', TodoGroupController::class);
Route::resource('todo-items', TodoItemController::class);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/master',[App\Http\Controllers\MasterController::class,'index']);
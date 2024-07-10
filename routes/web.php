<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoItemController;
use App\Http\Controllers\TodoGroupController;

Route::resource('todo-groups', TodoGroupController::class);
Route::resource('todo-items', TodoItemController::class);

Route::get('/', function () {
    return view('welcome');
});


<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::resource('todos', TodoController::class);

Route::get('/', function(){
    return to_route("todos.index");
});

Route::get('/todos/{todo}/complete', [TodoController::class, 'complete'])->name('todos.complete');


<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ToDoController;
use Illuminate\Support\Facades\Route;

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
    return view('details');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/todos', [ToDoController::class, "ListToDo"])->name('listtodo');
Route::get('/details/{id}', [ToDoController::class, "DetailsToDo"]);
Route::get('/delete/{id}', [ToDoController::class, "DeleteTodo"]);
Route::post('/storetodo', [ToDoController::class, "StoreToDo"])->name('storetodo');


Route::get('/categories', [CategoryController::class, "ListCategory"])->name('listCategory');
Route::post('/storecategory', [CategoryController::class, "StoreCategory"])->name('storecategory');
Route::get('/delete/{id}', [CategoryController::class, "DeleteCategory"]);

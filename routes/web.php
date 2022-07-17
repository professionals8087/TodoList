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

Route::get('/todos', [ToDoController::class, "ListToDo"])->name('listTodo');
Route::get('/todo/details/{id}', [ToDoController::class, "DetailsToDo"]);
Route::get('/todo/delete/{id}', [ToDoController::class, "DeleteToDo"]);
Route::post('/storetodo', [ToDoController::class, "StoreToDo"])->name('storeTodo');
Route::get('/todo/update/{id}', [ToDoController::class, "UpdateToDo"]);
Route::post('/todo/edit/{id}', [ToDoController::class, "EditToDo"])->name('editTodo');


Route::get('/categories', [CategoryController::class, "ListCategory"])->name('listCategory');
Route::post('/storecategory', [CategoryController::class, "StoreCategory"])->name('storeCategory');
Route::get('/category/delete/{id}', [CategoryController::class, "DeleteCategory"]);
Route::get('/category/update/{id}', [CategoryController::class, "UpdateCategory"]);
Route::post('/category/edit/{id}', [CategoryController::class, "EditCategory"])->name('editCategory');

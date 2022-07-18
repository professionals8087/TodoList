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


Auth::routes();
////////////////////////////////////////////////Route ToDos////////////////////////////////////////////////
Route::get('/todos', [ToDoController::class, "ListToDos"])->name('listtodos');
Route::post('/todos/create', [ToDoController::class, "CreateToDos"])->name('createtodos');
Route::get('/todos/delete/{id}', [ToDoController::class, "DeleteToDos"]);
Route::get('/todos/update/{id}', [ToDoController::class, "UpdateToDos"]);
Route::post('/todos/edit/{id}', [ToDoController::class, "EditToDos"])->name('edittodos');
Route::get('/todos/details/{id}', [ToDoController::class, "DetailsToDos"]);
Route::get('/todos/done/{id}', [ToDoController::class, "DoneToDos"]);
//////////////////////////////////////////////Route Categories/////////////////////////////////////////////
Route::get('/categories', [CategoryController::class, "ListCategories"])->name('listcategories');
Route::post('/categories/create', [CategoryController::class, "CreateCategories"])->name('createcategories');
Route::get('/categories/delete/{id}', [CategoryController::class, "DeleteCategories"]);
Route::get('/categories/update/{id}', [CategoryController::class, "UpdateCategories"]);
Route::post('/categories/edit/{id}', [CategoryController::class, "EditCategories"])->name('editcategories');

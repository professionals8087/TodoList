<?php

namespace App\Http\Controllers;

use App\Http\Requests\ToDoRequest;
use App\Models\Category;
use App\Models\Todo;
use Illuminate\Http\Request;

class ToDoController extends Controller
{
    /********************ListToDos********************/
    public function ListToDos()
    {
        $todo = Todo::getAll();
        $category = Category::getAll();
        return view('layouts.todos', ['todo' => $todo, 'category' => $category]);
    }
    /********************CreateToDos********************/
    public function CreateToDos(ToDoRequest $request)
    {
        $todo = new Todo();
        $todo->title = $request->title;
        $todo->description = $request->description;
        $todo->category_id = $request->category;
        if ($todo->save()) {
            return redirect()->route('listtodos');
        }
        return;
    }
    /********************DeleteToDos********************/
    public function DeleteToDos(Todo $id)
    {
        $id->delete();
        return redirect()->route('listtodos');
    }
    /********************UpdateToDos********************/
    public function UpdateToDos($id)
    {
        $id = Todo::getID($id);
        $category = Category::getAll();
        return view("layouts.update-todos", ["id" => $id, "category" => $category]);
    }
    /********************EditToDos********************/
    public function EditToDos(ToDoRequest $request, $id)
    {
        $stmt = Todo::getID($id);
        if ($stmt) {
            $stmt->title = $request->title;
            $stmt->description = $request->description;
            if ($stmt->save()) {
                return redirect()->route('listtodos');
            }
        }
        return;
    }
    /********************DoneToDos********************/
    public function DoneToDos($id)
    {
        $stmt = Todo::getID($id);
        $stmt->done_at = date('Y-m-d H:i:s');
        if ($stmt->save()) {
            return redirect()->route('listtodos');
        }
    }
    /********************DetailsToDos********************/
    public function DetailsToDos($id)
    {
        $stmt = Todo::getID($id);
        return view('layouts.infotodos', ["show" => $stmt]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class ToDoController extends Controller
{
    public function ListToDo()
    {
        $stmt = Todo::getAll();
        return view('todolist', ['todo' => $stmt]);
    }

    public function DetailsToDo($id)
    {
        $stmt = Todo::getID($id);
        return view('details', ["show" => $stmt]);
    }

    public function DeleteToDo(Todo $id)
    {
        $id->delete();
        return redirect()->route('listTodo');
    }

    public function StoreToDo(Request $request)
    {
        $todo = new Todo();
        $todo->title = $request->title;
        $todo->description = $request->description;
        $todo->category = $request->category;
        if ($todo->save()) {
            return redirect()->route('listTodo');
        }
        return;
    }

    public function UpdateToDo($id)
    {
        $id = Todo::getID($id);
        return view('editTodo', ["id" => $id]);
    }

    public function EditToDo(Request $request, $id)
    {
        $stmt = Todo::getID($id);
        if ($stmt) {
            $stmt->title = $request->title;
            $stmt->description = $request->description;
            if ($stmt->save()) {
                return redirect()->route('listTodo');
            }
        }
        return;
    }
}

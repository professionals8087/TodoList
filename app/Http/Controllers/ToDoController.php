<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class ToDoController extends Controller
{
    public function ListToDo()
    {
        $stmt = Todo::query()->get()->all();
        return view('todolist', ['todo' => $stmt]);
    }

    public function DetailsToDo($id)
    {
        $stmt = Todo::query()->find($id);
        return view('details', ["show" => $stmt]);
    }

    public function DeleteTodo(Todo $id)
    {
        $id->delete();
        return redirect()->route('listtodo');
    }

    public function StoreToDo(Request $request)
    {
        $todo = new Todo();
        $todo->title = $request->title;
        $todo->description = $request->description;
        $todo->category = $request->category;
        if ($todo->save()) {
            return redirect()->route('listtodo');
        }
        return;
    }
}

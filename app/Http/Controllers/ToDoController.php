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
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use App\Models\Todo;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /********************ListCategories********************/
    public function ListCategories()
    {
        $stmt = Category::getAll();
        return view('layouts.categories', ['category' => $stmt]);
    }
    /********************CreateCategories********************/
    public function CreateCategories(CategoryRequest $request)
    {
        $category = new Category();
        $category->name = $request->name;
        if ($category->save()) {
            return redirect()->route('listcategories');
        }
        return;
    }
    /********************DeleteCategories********************/
    public function DeleteCategories($id)
    {
        $category = Category::getID($id);
        Todo::query()
            ->where('category_id', $category->id)
            ->delete();
        $category->delete();
        return redirect()->route('listcategories');
    }
    /********************UpdateCategories********************/
    public function UpdateCategories($id)
    {
        $id = Category::getID($id);
        return view('layouts.update-categories', ["id" => $id]);
    }
    /********************EditCategories********************/
    public function EditCategories(CategoryRequest $request, $id)
    {
        $stmt = Category::getID($id);
        if ($stmt) {
            $stmt->name = $request->name;
            if ($stmt->save()) {
                return redirect()->route('listcategories');
            }
        }
        return;
    }
}

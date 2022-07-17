<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function ListCategory()
    {
        $stmt = Category::getAll();
        return view('categorylist', ['category' => $stmt]);
    }

    public function StoreCategory(Request $request)
    {
        $category = new Category();
        $category->name = $request->name;
        if ($category->save()) {
            return redirect()->route('listCategory');
        }
        return;
    }

    public function DeleteCategory(Category $id)
    {
        $id->delete();
        return redirect()->route('listCategory');
    }

    public function UpdateCategory($id)
    {
        $id = Category::getID($id);
        return view('editCategory', ["id" => $id]);
    }

    public function EditCategory(Request $request, $id)
    {
        $stmt = Category::getID($id);
        if ($stmt) {
            $stmt->name = $request->name;
            if ($stmt->save()) {
                return redirect()->route('listCategory');
            }
        }
        return;
    }
}

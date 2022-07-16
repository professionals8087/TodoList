<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function ListCategory()
    {
        $stmt = Category::query()->get()->all();
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
}

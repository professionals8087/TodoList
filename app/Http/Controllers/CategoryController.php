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
        $category->title = $request->title;
        if ($category->save()) {
            return redirect()->route('listCategory');
        }
        return;
    }
}

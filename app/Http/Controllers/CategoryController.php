<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller {

    public function createCategory(Request $request) {

        $category = new Category();
        $category->name = $request->name;
        $category->description = $request->description;
        $category->save();
        return redirect('/');

    }

    public function deleteCategory($categoryId) {
        $category = Category::find($categoryId);

        if ($category) $category->delete();

        return redirect('/');

    }

}
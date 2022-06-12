<?php

namespace App\Http\Controllers;

use App\Category;
use App\Posts;
use App\Http\Requests\CategoryRequest;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function AllCategory()
    {
        return response()->json(['data' => Category::all()], 200);
    }

    public function PostsOFEachCategories(Category $Category)
    {
        return $Category->Posts()->get();
    }

    public function GetCategory(Category $Category)
    {
        return response()->json(['data' => [$Category]]);
    }

    public function InsertCategory(CategoryRequest $CategoryRequest)
    {
        /**
         * Insert $PostsRequest in Posts Table
         */
        Category::create($CategoryRequest->toArray());
        return response("Category {$CategoryRequest['name']} Inserted !");
    }

    public function DeleteCategory(Category $Category)
    {
        $Category->delete();
        return response("deleted!");
    }

    public function UpdateCategory(Category $Category, CategoryRequest $CategoryRequest)
    {
        $oldName=$Category->name;
        $Required=['name'];
        $Category->update(Requests_Handle($CategoryRequest,$Required));
        return response("Category ({$oldName}) Updated to ({$CategoryRequest['name']}) ");
    }
}

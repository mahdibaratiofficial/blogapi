<?php

namespace App\Http\Controllers;

use App\Category;
use App\Posts;
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

    public function CategoryFaker(){
        Category::truncate();
        factory(Category::class,10)->create();
        return response('Old Fake Category Deleted and Inserted New Fake Records');
    }
}

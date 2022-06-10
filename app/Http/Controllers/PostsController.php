<?php

namespace App\Http\Controllers;

use App\Posts;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Return All Posts in DB
     * @return json
     */

    public function allPosts()
    {
        return response()->json(['content' => [Posts::all()]], 200);
    }

    /**
     * This Method used For Get User Per Id
     * @param UserModel
     * @return UserInfoJson
     */

    public function GetPost(Posts $Posts)
    {
        return response()->json(['data' => [$Posts]], 200);
    }

    public function PostInfo(Posts $Posts)
    {
        return response()->json(['data' => $Posts->user()->get()], 200);
    }

    public function PostCategory(Posts $Posts)
    {
        return response()->json(['data' => $Posts->categories()->get()], 200);
    }

    public function PostFaker(){
        Posts::truncate();
        factory(Posts::class,10)->create();
        return response('Old Fake Post Deleted and Inserted New Fake Records');
    }
}

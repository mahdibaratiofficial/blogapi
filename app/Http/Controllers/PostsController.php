<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostsRequest;
use App\Posts;
use Hamcrest\Type\IsString;
use Illuminate\Http\Request;
use PostsSeeder;
use Symfony\Component\HttpKernel\Event\PostResponseEvent;

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

    public function PostFaker()
    {
        Posts::truncate();
        factory(Posts::class, 10)->create();
        return response('Old Fake Post Deleted and Inserted New Fake Records');
    }

    public function InsertPost(PostsRequest $postsRequest)
    {
        /**
         * Insert $PostsRequest in Posts Table
         */
        Posts::create($postsRequest->toArray());
    }

    public function DeletePost(Posts $Posts)
    {
        $Posts->delete();
        return response("done");
    }

    public function UpdatePost(Posts $Posts, Request $PostsRequest)
    {
        $Required = ['title', 'body', 'user_id'];
        $Posts->update(Requests_Handle($PostsRequest,$Required));
    }

    public function PostsComments(Posts $Posts)
    {
        return response()->json(['data' => $Posts->Comments()->get()], 200);
    }
}

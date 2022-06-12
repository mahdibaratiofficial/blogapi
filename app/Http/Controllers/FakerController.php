<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Posts;
use App\Comments;
use App\Category;

class FakerController extends Controller
{

    /**
     * Record Fake Data for User Table
     */
    public function UserFaker()
    {
        User::truncate();
        factory(User::class, 10)->create();
        return response('Old Fake User Deleted and Inserted New Fake Records');
    }


    /**
     * Record Faker Data For Posts Table
     */
    public function PostFaker()
    {
        Posts::truncate();
        factory(Posts::class, 10)->create();
        return response('Old Fake Post Deleted and Inserted New Fake Records');
    }

    /**
     * Record Faker Data For Comments Table
     */
    public function CommentFaker()
    {
        Comments::truncate();
        factory(Comments::class, 10)->create();
        return response('Old Fake Comments Deleted and Inserted New Fake Records');
    }

    /**
     * Record Faker Data For Category Table
     */
    public function CategoryFaker()
    {
        Category::truncate();
        factory(Category::class, 10)->create();
        return response('Old Fake Category Deleted and Inserted New Fake Records');
    }


    public function All()
    {

        factory(User::class, 10)->create()->each(function ($user) {
            $user->posts()->saveMany(factory(Posts::class, rand(1, 5))->make());
            $user->comments()->saveMany(factory(Comments::class, rand(1, 3))->make());
        });


        $this->CategoryFaker();
    }
}

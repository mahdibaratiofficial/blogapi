<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function GetAllUser()
    {
        return response()->json(['data' => [User::all()]], 200);
    }

    public function GetUser(User $User)
    {
        return response()->json(['data' => [$User]], 200);
    }

    public function GetUserPosts(User $User)
    {
        return response()->json(['data' => $User->posts()->get()], 200);
    }

    public function UserFaker()
    {
        User::truncate();
        factory(User::class, 10)->create();
        return response('Old Fake User Deleted and Inserted New Fake Records');
    }


    public function InsertUser(UserRequest $userRequest)
    {
        /**
         * Insert $PostsRequest in Posts Table
         */
        User::create($userRequest->toArray());
        return response("User : {$userRequest['username']} created");
    }

    public function DeleteUser(User $User)
    {
        $User->delete();
        return response("done");
    }

    public function UpdateUser(User $User, UserRequest $userRequest)
    {
        $Required=['username','name','email','password'];
        $User->update(Requests_Handle($userRequest,$Required));
    }

    public function UserComments(User $User)
    {
        return response()->json(["@" . $User->username . " Comments" => [$User->Comments()->get()]]);
    }
}

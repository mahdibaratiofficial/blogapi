<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function GetAllUser()
    {
        return response()->json(['data' => [User::all()]], 200);
    }

    public function GetUser(User $User){
        return response()->json(['data'=>[$User]],200);
    }

    public function GetUserPosts(User $User){
        return response()->json(['data'=>$User->posts()->get()],200);
    }

    public function UserFaker(){
        User::truncate();
        factory(User::class,10)->create();
        return response('Old Fake User Deleted and Inserted New Fake Records');
    }
}

<?php

namespace App\Http\Controllers;

use App\Comments;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function AllComments()
    {
        return response()->json(['data' => Comments::all()], 200);
    }

    public function GetComment(Comments $Comments)
    {
        return response()->json(['data' => $Comments], 200);
    }

    public function CommentFaker(){
        Comments::truncate();
        factory(Comments::class,10)->create();
        return response('Old Fake Comments Deleted and Inserted New Fake Records');
    }
}

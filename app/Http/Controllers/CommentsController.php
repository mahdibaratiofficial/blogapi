<?php

namespace App\Http\Controllers;

use App\Comments;
use App\Http\Requests\CommentsRequest;
use Egulias\EmailValidator\Warning\Comment;
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

    public function InsertComment(CommentsRequest $CommentsRequest)
    {
        Comments::create($CommentsRequest->toArray());
    }

    public function UpdateComment(Comments $Comments, CommentsRequest $commentsRequest)
    {
        $Required=['posts_id','user_id','body'];
        $Comments->update(Requests_Handle($commentsRequest,$Required));
    }
    public function DeleteComment(Comments $Comments)
    {
        $Comments->delete();
    }

    public function CommentUser(Comments $Comments)
    {
        return response()->json(['user' => $Comments->user()->get()], 200);
    }
}

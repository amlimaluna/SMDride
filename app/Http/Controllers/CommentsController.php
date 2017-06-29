<?php

namespace SMDRide\Http\Controllers;

use Illuminate\Http\Request;

use SMDRide\Carpooling\Contracts\ICommentsRepository;
use SMDRide\Carpooling\CommentsManager;
use SMDRide\Http\Requests\CommentRequest;
use SMDRide\Comment;

class CommentsController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Comment::class);
    }

    public function store(CommentRequest $request)
    {
        Comment::create($request->only('text'));
    }

    public function destroy(Comment $comment)
    {
        $comment->delete();
        return redirect()->back()->with('success', 'messages.success.deleted-comment');
    }
}
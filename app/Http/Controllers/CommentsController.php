<?php

namespace SMDRide\Http\Controllers;

use Illuminate\Http\Request;

use SMDRide\Carpooling\Contracts\ICommentsRepository;
use SMDRide\Carpooling\CommentsManager;
use SMDRide\Http\Requests\CommentRequest;
use SMDRide\Comment;
use SMDRide\Ride;

class CommentsController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Comment::class);
    }

    public function store(CommentRequest $request, Ride $ride)
    {
        $ride->comments()->create([
            'text'    => $request->get('text'),
            'user_id' => $request->user()->id
        ]);

        return redirect()->back()->with('success', 'messages.success.created-comment');
    }

    public function destroy(Comment $comment)
    {
        $comment->delete();
        return redirect()->back()->with('success', 'messages.success.deleted-comment');
    }
}


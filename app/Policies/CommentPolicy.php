<?php

namespace SMDRide\Policies;

use SMDRide\User;
use SMDRide\Comment;
use Illuminate\Auth\Access\HandlesAuthorization;

class CommentPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the comment.
     *
     * @param  \SMDRide\User  $user
     * @param  \SMDRide\Comment  $comment
     * @return boolean
     */
    public function view(User $user, Comment $comment)
    {
        return true;
    }

    /**
     * Determine whether the user can create comments.
     *
     * @param  \SMDRide\User  $user
     * @return bool
     */
    public function create(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can update the comment.
     *
     * @param  \SMDRide\User  $user
     * @param  \SMDRide\Comment  $comment
     * @return bool
     */
    public function update(User $user, Comment $comment)
    {
        return $this->belongsTo($user, $comment);
    }

    /**
     * Determine whether the user can delete the comment.
     *
     * @param  \SMDRide\User  $user
     * @param  \SMDRide\Comment  $comment
     * @return bool
     */
    public function delete(User $user, Comment $comment)
    {
        return $this->belongsTo($user, $comment);
    }

    /**
     * @param User $user
     * @param Comment $comment
     * @return bool
     */
    private function belongsTo(User $user, Comment $comment)
    {
        return $user->id == $comment->user_id;
    }

}

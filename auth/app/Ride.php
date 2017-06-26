<?php

namespace App;

use \App\User;
use \App\Comment;
use Illuminate\Database\Eloquent\Model;

class Ride extends Model
{
    protected $fillable = [
        'address', 'date', 'car',
    ];

    public function ownedUser()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function passegerUsers()
    {
        return $this->belongsToMany(User::class);
    }
}
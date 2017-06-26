<?php

namespace App;

use App\Ride;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'username', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function ownedRides()
    {
        return $this->hasMany(Ride::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function passegerRides ()
    {
        return $this->belongsToMany(Ride::class);
    }
}

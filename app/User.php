<?php

namespace SMDRide;

use SMDRide\Ride;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * @property int id
 */
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'username',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function ownedRides()
    {
        return $this->hasMany(Ride::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function ridesAsPassenger()
    {
        return $this->belongsToMany(Ride::class);
    }
}

<?php

namespace SMDRide\Policies;

use SMDRide\User;
use SMDRide\Ride;
use Illuminate\Auth\Access\HandlesAuthorization;

class RidePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the ride.
     *
     * @param  \SMDRide\User  $user
     * @param  \SMDRide\Ride  $ride
     * @return bool
     */
    public function view(User $user, Ride $ride)
    {
        return true;
    }

    /**
     * Determine whether the user can create rides.
     *
     * @param  \SMDRide\User  $user
     * @return bool
     */
    public function create(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can update the ride.
     *
     * @param  \SMDRide\User  $user
     * @param  \SMDRide\Ride  $ride
     * @return bool
     */
    public function update(User $user, Ride $ride)
    {
        return $this->belongsTo($user, $ride);
    }

    /**
     * Determine whether the user can delete the ride.
     *
     * @param  \SMDRide\User  $user
     * @param  \SMDRide\Ride  $ride
     * @return bool
     */
    public function delete(User $user, Ride $ride)
    {
        return $this->belongsTo($user, $ride);
    }

    /**
     * @param User $user
     * @param Ride $ride
     * @return bool
     */
    private function belongsTo(User $user, Ride $ride)
    {
        return $user->id == $ride->user_id;
    }
}

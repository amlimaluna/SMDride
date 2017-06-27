<?php namespace SMDRide\Carpooling;

use Carbon\Carbon;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Collection;
use SMDRide\Carpooling\Contracts\IRidesRepository;
use SMDRide\Ride;
use SMDRide\User;

class RidesManager implements IRidesRepository
{
    /**
     * @var \Illuminate\Contracts\Auth\Authenticatable|User
     */
    private $auth;

    /**
     * RidesManager constructor.
     * @param Guard $guard
     */
    public function __construct(Guard $guard)
    {
        $this->auth = $guard->user();
    }

    /**
     * @param int $paginationResults
     * @return Collection
     */
    public function getNewestRides($paginationResults)
    {
        return Ride
            ::upToDate()
            ->orderBy('date', 'desc')
            ->paginate($paginationResults);
    }

    public function scheduleRide($address, Carbon $date, $car)
    {
        return $this->auth
            ->ownedRides()
            ->create(compact('address', 'date', 'car'));
    }


}
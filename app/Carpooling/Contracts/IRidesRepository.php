<?php
/**
 * Created by PhpStorm.
 * User: luizg
 * Date: 26/06/2017
 * Time: 00:18
 */

namespace SMDRide\Carpooling\Contracts;


use Carbon\Carbon;
use Illuminate\Support\Collection;

interface IRidesRepository
{
    /**
     * @param int $paginationResults
     * @return Collection
     */
    function getNewestRides($paginationResults);

    /**
     * @param $address
     * @param Carbon $date
     * @param string $car
     * @return \SMDRide\Ride
     */
    function scheduleRide($address, Carbon $date, $car);
}
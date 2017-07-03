<?php

namespace SMDRide\Http\Controllers;


use Illuminate\Http\Request;
use Carbon\Carbon;


use SMDRide\Carpooling\Contracts\IRidesRepository;
use SMDRide\Carpooling\RidesManager;
use SMDRide\Http\Requests\RideRequest;
use SMDRide\Ride;

class RidesController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Ride::class);
    }

    /**
     * Display a listing of the resource.
     *
     * @param IRidesRepository $manager
     * @return \Illuminate\Http\Response
     */
    public function index(IRidesRepository $manager)
    {
        $rides = $manager->getNewestRides(6);

        return view('rides.index', compact('rides'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rides.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param RideRequest $request
     * @param RidesManager $manager
     * @return \Illuminate\Http\Response
     */
    public function store(RideRequest $request, RidesManager $manager)
    {
        $date = Carbon::createFromFormat('d/m/Y H:i', $request->get('date'));
        $car = $request->get('car');
        $address = $request->get('address');

        $manager->scheduleRide($address, $date, $car);

        return redirect()->route('rides.index')->with('success', 'messages.success.created-ride');
    }

    /**
     * Display the specified resource.
     *
     * @param Ride $ride
     * @return \Illuminate\Http\Response
     */
    public function show(Ride $ride)
    {
        return view('rides.show', compact('ride'));
    }

	
    /**
     * Show the form for editing the specified resource.
     *
     * @param Ride $ride
     * @return \Illuminate\Http\Response
     */
    public function edit(Ride $ride)
    {
        return view('rides.edit', compact('ride'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param RideRequest $request
     * @param Ride $ride
     * @return \Illuminate\Http\Response
     */
    public function update(RideRequest $request, Ride $ride)
    {
        $ride->update($request->all());

        return redirect()->route('rides.index')->with('success', 'messages.success.updated-ride');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Ride $ride
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ride $ride)
    {
        $ride->delete();
        return redirect()->back()->with('success', 'messages.success.deleted-ride');
    }

	public function addPassenger (Ride $ride, RideRequest $request)
	{
        $user_id = $request->get('user_id');
        $ride->passengers()->attach($user_id);

        return redirect()->back();
	} 
	
}


<?php

use Illuminate\Database\Seeder;
use SMDRide\Ride;
use SMDRide\User;

class RidesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        foreach (User::all() as $user) {
            $rides = factory(Ride::class)->times(random_int(1, 5))->create([ 'user_id' => $user->id ]);
            foreach ($rides as $ride) {
                /** @var Ride $ride */
                for ($i = 0; $i <= random_int(0, 4); $i++)
                    $ride->passengers()->attach(User::where('id', '<>', $user->id)->inRandomOrder()->first()->id);
            }
        }

    }
}

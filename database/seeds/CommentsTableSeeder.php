<?php

use Illuminate\Database\Seeder;
use SMDRide\Comment;
use SMDRide\Ride;
use SMDRide\User;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (Ride::all() as $ride) {
            $user = User::inRandomOrder()->first();
            factory(Comment::class)->times(random_int(0, 20))->create(['ride_id' => $ride->id, 'user_id' => $user->id]);
        }
    }
}

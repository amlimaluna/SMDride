<?php

use Illuminate\Database\Seeder;
use SMDRide\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Administrador',
            'username' => 'admin',
            'password' => bcrypt('smd2017')
        ]);

        if ($this->command->confirm('Deseja adicionar usuarios e caronas aleatorios a base?')) {
            $this->call(UsersTableSeeder::class);
            $this->call(RidesTableSeeder::class);
            $this->call(CommentsTableSeeder::class);
        }
    }
}

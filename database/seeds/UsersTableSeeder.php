<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
        	'name' => 'Samson Samuels',
        	'email' => 'samsonadegboyega@gmail.com',
        	'password' => bcrypt('password')
        ]);

        App\User::create([ 
        	'name' => 'admin',
        	'email' => 'admin@webcoupers.com',
        	'password' => bcrypt('password')
        ]);
    }
}

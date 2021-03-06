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
        $user = App\User::create([ 
        	'name' => 'admin',
        	'email' => 'admin@webcoupers.com', 
        	'password' => bcrypt('password'),
            'admin' => 1
        ]);


        App\Profile::create([
            'user_id' => $user->id,
            'avatar' => 'uploads/posts/1.png',
            'about' => 'iddis hfi hdoifhsdhfd psdhf puhsducfgduh sdhduspi',
            'facebook' => 'facebook.com',
            'youtube' => 'youtube.com'
            'avatar_url' => 'http://res.cloudinary.com/webcoupers/image/upload/v1527712446/1.png'
        ]); 

    }
}

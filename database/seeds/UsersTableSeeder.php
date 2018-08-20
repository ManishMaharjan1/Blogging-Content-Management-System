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
            'name' => 'Manish Maharjan',
            'email' => 'manish@gmail.com',
            'password' => bcrypt('password'),
            'admin'=> 1

        ]);

        App\Profile::create([

            'user_id' => $user->id,
            'avatar' => 'uploads/avatars/2.png',
            'about' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'facebook' => 'facebook.com',
            'youtube' => 'youtube.com'

        ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Setting::create([

            'site_name' => "Laravel\'s Blog",
            'address' => 'Iowa, USA',
            'contact_number' => '455 5565 6658',
            'contact_email' => 'info@laravel_blog.com
            '

        ]);
    }
}

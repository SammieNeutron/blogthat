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
        	'site_name' => 'Blogthat',
        	'contact_number' => '+234 817 561 9608',
        	'contact_email' => 'info@blogthat.com',
        	'address' => '65, Militant Estate, DaddiesVille, Canada'
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;
use App\Setting;
class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Setting::create([
            'name' => 'marwo',
            'img' => '1.png',
            'logo' => 'logo.png',
            'favicon' => 'favicon.png' ,
            'city' => 'cairo'  ,
            'address' => 'elex' ,
            'phone' => '011551489' ,
            'work_hours' => '1pm-5pm' ,
            'email' => 'marwa@gmail.com' ,
            'map' => 'kbhhjm' ,
            'fb' => 'https://laravel.com/docs/7.x/upgrade#factory-types' ,

            'twitter' => 'https://laravel.com/docs/7.x/upgrade#factory-types' ,
            'insta' => 'https://laravel.com/docs/7.x/upgrade#factory-types' ,
                    ]);
            
                    Setting::create([
                        'name' => 'mona',
                        'img' => '1.png',
                        'logo' => 'logo.png',
                        'favicon' => 'favicon.png' ,
                        'city' => 'cairo'  ,
                        'address' => 'elex' ,
                        'phone' => '011551489' ,
                        'work_hours' => '1pm-5pm' ,
                        'email' => 'mona@gmail.com' ,
                        'map' => 'kbhhjm' ,
                        'fb' => 'https://laravel.com/docs/7.x/upgrade#factory-types' ,
            
                        'twitter' => 'https://laravel.com/docs/7.x/upgrade#factory-types' ,
                        'insta' => 'https://laravel.com/docs/7.x/upgrade#factory-types' ,
                                ]);
}
}
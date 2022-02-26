<?php

namespace Database\Seeders;

use App\Models\Seos;
use Illuminate\Database\Seeder;

class seosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Seos::create([
            'meta_author' => 'Admin',
            'meta_title' => 'admin@gmail.com',
            'meta_keyword' => 'Admin',
            'meta_description' => 'admin@gmail.com',
            'google_analytics' => 'Admin',
            'google_verification' => 'admin@gmail.com',
            'alexa_analytics' => 'Admin',
            'adsense_code' => 'Admin',
            'fcmserver' => 'fcm Key',

        ]);
    }
}

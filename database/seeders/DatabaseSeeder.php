<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
{
    Setting::create([
        'website_title' => 'CaterServ',
        'slogan' => 'Book CaterServ For Your Dream Event',
        'logo_top' => 'path/to/logo-top.png',
        'address' => 'V23 Street, New York, USA',
        'phone' => '+012 3456 7890',
        'email' => 'info@example.com',
        'facebook' => 'https://facebook.com/caterserv',
        'twitter' => 'https://twitter.com/caterserv',
        'youtube' => 'https://youtube.com/caterserv',
        'linkedin' => 'https://linkedin.com/company/caterserv',
        'instagram' => 'https://instagram.com/caterserv',
        'google_map' => '<iframe src="...">',
        'created_by' => 1, // ID of admin user
    ]);
}
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class SettingSeeder extends Seeder
{
    use WithoutModelEvents;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('settings')->insert([
            'name' => 'Hostrare CMS',
            'tagline' => 'Welcome',
            'scroll' => '',
            'icon' => '1696181982.png',
            'logo' => '1696057933.png',
            'altlogo' => '1696057933.png',
            'address' => 'Lift-7, Mukto Bangla Shopping Complex, Mirpur-1216',
            'tel' => '+8801977507016',
            'mobile' => '+8801977507015',
            'email' => 'info@hostrare.com',
            'link1' => 'https://facebook.com/hostrare',
            'link2' => 'https://instagram.com/hostrare',
            'link3' => 'https://twitter.com/hostrareltd',
            'link4' => 'https://www.linkedin.com/company/hostrare',
            'link5' => 'https://pinterest.com/',
            'link6' => 'https://youtube.com/@hostrare',
            'office_hours' => 'Sunday-Thursday (9am-5pm)',
            'map_link' => 'https://maps.app.goo.gl/4dCGsdyUkoYcF5wPA',
            'copyright' => 'Copyright © 2023 Hostrare Limited. All Rights Reserved.',
            'Delivery_Charge_Inside_Dhaka' => '0',
            'Delivery_Charge_Outside_Dhaka' => '0',
        ]);
    }
}

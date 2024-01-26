<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class PageSeeder extends Seeder
{
    use WithoutModelEvents;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pages')->insert([
            'parent_page' => '0',
            'name' => 'Home',
            'slug' => 'home',
            'sorts' => '1',
            'title' => 'Home Page',
            'details' => 'Updating...',
            'links' => '{{URL::to(`/`)}}',
            'creator' => 1,
            'status' => 1,
        ]);
        DB::table('pages')->insert([
            'parent_page' => '0',
            'name' => 'About us',
            'slug' => 'about_us',
            'sorts' => '2',
            'title' => 'About us',
            'details' => 'Updating...',
            'links' => '',
            'creator' => 1,
            'status' => 1,
        ]);
        DB::table('pages')->insert([
            'parent_page' => '0',
            'name' => 'Contact us',
            'slug' => 'contact_us',
            'sorts' => '1',
            'title' => 'Contact us',
            'details' => 'Updating...',
            'links' => '',
            'creator' => 1,
            'status' => 1,
        ]);
    }
}

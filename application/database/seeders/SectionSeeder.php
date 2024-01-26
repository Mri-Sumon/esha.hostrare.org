<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class SectionSeeder extends Seeder
{
    use WithoutModelEvents;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sections')->insert([
            'name' => 'Slider',
            'slug' => 'slider',
        ]);
        DB::table('sections')->insert([
            'name' => 'Banner 1',
            'slug' => 'banner1',
        ]);        
        DB::table('sections')->insert([
            'name' => 'Banner 2',
            'slug' => 'banner2',
        ]);
        DB::table('sections')->insert([
            'name' => 'Banner 3',
            'slug' => 'banner3',
        ]);
        DB::table('sections')->insert([
            'name' => 'Brand',
            'slug' => 'brand',
        ]);
        DB::table('sections')->insert([
            'name' => 'Others',
            'slug' => 'na',
        ]);
    }
}

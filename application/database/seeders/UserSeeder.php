<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    use WithoutModelEvents;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'utype' => 'ADM',
            'permissions' => 'dashbaord,products,orders,address,transactions,categories,pages,posts,pictures,settings,users,bkash,sections,themes',
            'name' => 'Developer Hostrare',
            'phone' => '01977507016',
            'email' => 'evan@hostrare.com',
            'password' => Hash::make('Bindim@321'),
        ]);
        DB::table('users')->insert([
            'utype' => 'ADM',
            'permissions' => 'dashbaord,products,orders,address,transactions,categories,pages,posts,pictures,settings,customers',
            'name' => 'Admin',
            'phone' => '01977507015',
            'email' => 'admin@hostrare.com',
            'password' => Hash::make('Bindim@321'),
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'first_name' => 'Syariif Abdurrahman',
            'last_name' => 'Bathik',
            'no_hp' => '082140002851',
            'email' => '1202194114@gmail.com',
            'password' => Hash::make('admin'),
        ]);

        User::create([
            'first_name' => 'Shoe',
            'last_name' => 'Cleaning',
            'no_hp' => '082140002851',
            'email' => 'admin@gmail.com',
            'is_admin' => true,
            'password' => Hash::make('admin'),
        ]);
    }
}
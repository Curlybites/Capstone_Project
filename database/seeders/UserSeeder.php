<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        User::create([
            'firstname' =>'Admin',
            'middlename'=> 'Administration',
            'lastname'=> 'Administration',
            'sex' => Faker::create()->randomElement(['male', 'female']),
            'birthdate' => Faker::create()->dateTimeBetween('-30 years', '-18 years')->format('Y-m-d'),
            'address' => 'Quezon City',
            'contact'=> '1234',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin123'),
            'image' => "",
            'role'=> 1,
            'remember_token' => Str::random(20),
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'Admin',
                'email' => 'admin@avasam.ir',
                'is_admin' => '1',
                'password' => bcrypt('123456'),
                'adress' => Hash::make('jfdkslaj'),
            ],
            [
                'name' => 'User',
                'email' => 'user@avasam.ir',
                'is_admin' => '0',
                'password' => bcrypt('123456'),
                'adress' => Hash::make('jfdkslaj'),
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}

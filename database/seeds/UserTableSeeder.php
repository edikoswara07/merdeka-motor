<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //KETIGA DATA INI AKAN DIJADIKAN DUMMY USER DENGAN MASING-MASING ROLE YANG DIMILIKINYA
        User::create([
            'name' => 'Edi Koswara',
            'email' => 'manager@gmail.com',
            'password' => bcrypt('secret'),
            'avatar' => 'avatar.jpg',
            'role' => 'Manager'
        ]);

        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('secret'),
            'avatar' => 'avatar.jpg',
            'role' => 'Admin'
        ]);

        User::create([
            'name' => 'User',
            'email' => 'user@gmail.com',
            'password' => bcrypt('secret'),
            'avatar' => 'avatar.jpg',
            'role' => 'User'
        ]);

        User::create([
            'name' => 'DaengWeb',
            'email' => 'daengweb@gmail.com',
            'password' => bcrypt('secret'),
            'avatar' => 'avatar.jpg',
            'role' => 'Customer'
        ]);
    }
}

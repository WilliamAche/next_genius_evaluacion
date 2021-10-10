<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $arrayUsers = [
            
            [
                'name' => 'Admin NextGenius',
                'email' => 'admin@nextgenius.com',
                'password' => Hash::make('123456789'),
                'admin' => '1',
                'status' => 1,
            ],
            
            [
                'name' => 'User NextGenius',
                'email' => 'user@nextgenius.com',
                'password' => Hash::make('123456789'),
                'admin' => '0',
                'status' => 1,
            ],

    ];
    foreach ($arrayUsers as $users ) {
        User::create($users);
    }

    }
}

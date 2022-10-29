<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $data = [
            [
                'name'=>'user1',
                'email'=>'user1@gmail.com',
                'password'=>bcrypt('12345'),
                'role_id'=>1,
                'membership_id'=>1,
                'payment_status'=>1,
            ],

            [
                'name'=>'user2',
                'email'=>'user2@gmail.com',
                'password'=>bcrypt('12345'),
                'role_id'=>1,
                'membership_id'=>2,
                'payment_status'=>1,
            ],

            [
                'name'=>'admin',
                'email'=>'admin@gmail.com',
                'password'=>bcrypt('12345'),
                'role_id'=>2,
                'membership_id'=>2,
                'payment_status'=>1,
            ],
        ];

        foreach ($data as $key => $value) {
            User::create($value);
        }
    }
}

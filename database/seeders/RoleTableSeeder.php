<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleTableSeeder extends Seeder
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
                'name' => 'User',
                'slug' => Str::slug('User')
            ],
            [
                'name' => 'Admin',
                'slug' => Str::slug('Admin')
            ],
        ];

        foreach ($data as $key => $value) {
            Role::create($value);
        }
    }
}

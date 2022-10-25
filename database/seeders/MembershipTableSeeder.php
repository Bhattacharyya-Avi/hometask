<?php

namespace Database\Seeders;

use App\Models\Membership;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MembershipTableSeeder extends Seeder
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
                'name' => 'Premium',
                'slug' => Str::slug('Premium'),
                'price' => 100,
            ],
            [
                'name' => 'Free',
                'slug' => Str::slug('Free')
            ],
        ];

        foreach ($data as $key => $value) {
            Membership::create($value);
        }
    }
}

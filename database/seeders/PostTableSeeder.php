<?php

namespace Database\Seeders;

use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
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
                'user_id' => 1,
                'title' => 'this is post 1 ',
                'details' => 'this is post 1this is post 1 this is post 1 this is post 1',
                'date'=>Carbon::now()->toDateString(),
            ],

            [
                'user_id' => 2,
                'title' => 'this is post 2',
                'details' => 'this is post 1this is post 1 this is post 1 this is post 1',
                'date'=>Carbon::now()->toDateString(),
            ],
        ];

        foreach ($data as $key => $value) {
            Post::create($value);
        }
    }
}

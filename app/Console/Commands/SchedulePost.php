<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use App\Models\Post;
use App\Models\User;
use App\Jobs\PostCreateJob;
use Illuminate\Console\Command;
use App\Models\SchedulePost as ModelsSchedulePost;

class SchedulePost extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'schedule:post';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'posting pre schedule posts on the time';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // return Command::SUCCESS;
        $current_time = Carbon::now()->format('Y-m-d H:i');
        $posts = ModelsSchedulePost::where('date_time',$current_time)->get();
        if ($posts) {
            foreach ($posts as $key => $post) {
                Post::create([
                    'user_id' => $post->user_id,
                    'title' => $post->title,
                    'details' => $post->details,
                ]);

                $user = User::where('id',$post->user_id)->first();
                dispatch(new PostCreateJob($user));

                $post->delete();
            }
        }
    }
}

<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function home()
    {
        $posts = Post::with('user')->orderBy('id','desc')->get();
        $postcount = 0;
        $todayDate = Carbon::now()->toDateString();
        if (auth()->user()->membership_id == 2) {
            $postcount = Post::where([
                ['user_id',auth()->user()->id],
                ['date',$todayDate]
            ])->count();
            return view('frontend.home.index',compact('postcount','posts'));
        }
        return view('frontend.home.index',compact('posts'));

    }
}

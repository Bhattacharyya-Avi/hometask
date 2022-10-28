<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function home()
    {
        $postcount = 0;
        if (auth()->user()->membership_id == 2) {
            $postcount = Post::where('user_id',auth()->user()->id)->count();
            return view('frontend.home.index',compact('postcount'));
        }
        return view('frontend.home.index');

    }
}

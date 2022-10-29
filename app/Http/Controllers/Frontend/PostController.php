<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Jobs\PostCreateJob;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create()
    {
        $todayDate = Carbon::now()->toDateString();
        $postcount = Post::where([
            ['user_id',auth()->user()->id],
            ['date',$todayDate]
        ])->count();
        return view('frontend.post.add',compact('postcount'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'title' => 'required',
            'details' => 'required',
        ]);

        Post::create([
            'user_id' => auth()->user()->id,
            'title' => $request->title,
            'details' => $request->details,
            'date' => Carbon::now()->toDateString(),
        ]);

        $user = auth()->user();
        dispatch(new PostCreateJob($user));
        notify()->success('Post created');
        return redirect()->route('home');
    }
}

<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Jobs\PostCreateJob;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create()
    {
        return view('frontend.post.add');
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
        ]);

        $user = auth()->user();
        dispatch(new PostCreateJob($user));
        notify()->success('Post created');
        return redirect()->route('home');
    }
}

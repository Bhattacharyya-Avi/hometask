<?php

namespace App\Http\Controllers\Frontend;

use App\Models\SchedulePost;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;

class SchedulePostController extends Controller
{
    public function schedulePostAdd()
    {
        return view('frontend.schedulePost.add');
    }

    public function schedulePostStore(Request $request)
    {
        $request -> validate([
            'title'=>'required',
            'details'=>'required',
            'date_time'=>'required',
        ]);

        SchedulePost::create([
            'user_id' => auth()->user()->id,
            'title' => $request->title,
            'details' => $request->details,
            'date_time' => $request->schedule_time,
        ]);
        notify()->success('schedule post create.');
        return redirect()->route('home');
    }
}

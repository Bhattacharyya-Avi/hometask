<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use App\Models\SchedulePost;

class SchedulePostController extends Controller
{
    public function schedulePostAdd()
    {
        
        return view('frontend.schedulePost.add');
    }

    public function schedulePostStore(Request $request)
    {
        // dd($request->all(),Carbon::now());

        SchedulePost::create([
            'user_id' => auth()->user()->id,
            'title' => $request->title,
            'details' => $request->details,
            'date_time' => $request->schedule_time,
        ]);
        return redirect()->back();
    }
}

<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userlist()
    {
        $users = User::with('membership')->where('role_id',1)->get();
        return view('backend.user.list',compact('users'));
    }
}

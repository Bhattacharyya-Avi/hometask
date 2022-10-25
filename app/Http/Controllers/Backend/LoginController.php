<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Membership;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login()
    {
        return view('backend.login.login');
    }

    public function registration()
    {
        $memberships = Membership::all();
        return view('backend.login.registration',compact('memberships'));
    }

    public function doRegistration(Request $request)
    {
        // dd($request->all());
        
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'membership_id' => $request->membership,
            'role_id' => 2,
        ]);

        return redirect()->route('payment',['user'=>$user]);
    }
}

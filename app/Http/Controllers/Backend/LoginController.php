<?php

namespace App\Http\Controllers\Backend;

use App\Models\Role;
use App\Models\User;
use App\Models\Membership;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('backend.login.login');
    }

    public function loginPost(Request $request)
    {
        $request->validate([
            'email'=> 'required|email'
        ]);
        $user_input = $request->except('_token');
        if (Auth::attempt($user_input)) {
            // no error occer during premium registration process 
            if (auth()->user()->payment_status == 1) {
                return redirect()->route('home');
            }
            //payment was failed
            return redirect()->route('payment',auth()->user()->id);
        }
    }

    public function registration()
    {
        $memberships = Membership::all();
        return view('backend.login.registration',compact('memberships'));
    }

    public function doRegistration(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'membership' => 'required',
        ]);
        try {
            if ($request->membership == 2) {
                $user = User::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => bcrypt($request->password),
                    'membership_id' => $request->membership,
                    'role_id' => 1,
                    'payment_status' => 1
                ]);
                notify()->success('Registration successfull.');
                return redirect()->route('home');
            }else {
                $user = User::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => bcrypt($request->password),
                    'membership_id' => $request->membership,
                    'role_id' => 1,
                ]);
                notify()->success('Pay amount to active your account');
                return redirect()->route('payment',['user'=>$user]);
            }
        } catch (\Throwable $th) {
            notify()->error($th->getMessage());
        }
        
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('login');
    }
}

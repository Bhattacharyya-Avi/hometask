<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login()
    {
        return view('backend.login.login');
    }

    public function registration()
    {
        return view('backend.login.registration');
    }
}

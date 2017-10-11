<?php

namespace App\Http\Controllers\CoachesAuth;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    protected $redirectTo = '/coach';
    use AuthenticatesUsers;    //
    protected function guard()
    {
        return Auth::guard('coach');
    }
    public function showLoginForm()
    {
        return view('auth.coach-login');
    }
}

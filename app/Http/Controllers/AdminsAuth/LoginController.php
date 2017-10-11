<?php

namespace App\Http\Controllers\AdminsAuth;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    protected $redirectTo = '/admin-home';
    use AuthenticatesUsers;  
    protected function guard()
    {
        return Auth::guard('admin');
    }
    public function showLoginForm()
    {
        return view('auth.admin-login');
    }
    //
}

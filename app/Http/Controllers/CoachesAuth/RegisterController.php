<?php

namespace App\Http\Controllers\CoachesAuth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\coaches;

class RegisterController extends Controller
{
    
    protected $redirectPath = 'coach.home';
    
    
    public function showRegistrationForm()
    {
        return view('coach.auth.register');
    }
    public function register(Request $request)
    {
        
        //Validates data
        $this->validator($request->all())->validate();
        
        //Create seller
        $coach = $this->create($request->all());
        
        //Authenticates seller
        $this->guard()->login($coach);
        
        //Redirects sellers
        return redirect($this->redirectPath);
    }
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'designation' => 'required|max:255',
            'email' => 'required|email|max:255|unique:coaches',
            'password' => 'required|min:6|confirmed',
        ]);
    }
    protected function create(array $data)
    {
        return coaches::create([
            'name' => $data['name'],
            'designation'=>$data['designation'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
    protected function guard()
    {
        return Auth::guard('coach');
    }
}

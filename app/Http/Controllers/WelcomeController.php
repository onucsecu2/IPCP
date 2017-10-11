<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){
        return view('frontEnd.home.homeContent');
    }
    public function  rank(){
        return view('frontEnd.rank.contestRank');
    }
    public function  coach(){
        return view('frontEnd.coach.coachesList');
    }
    
    //
}

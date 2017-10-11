<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Problems;
use App\test;
use App\contest;
class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontEnd.admin.AdminHomeContent');
    }
    public function createContest()
    {
        $Problems=Problems::all();
        return view('frontEnd.admin.CreateContest',['Problems'=>$Problems]);
    }
    public function saveContest(Request $request)
    {
        //return $request->all();
        contest::create($request->all());
        
        return redirect('/admin-home/create-contest')-> with('message','Contest Published Successfully');
    }
    
}


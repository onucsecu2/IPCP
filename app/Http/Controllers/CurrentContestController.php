<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\hackerearth;
use Illuminate\Auth\Access\Response;



class CurrentContestController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    
    public function currentContest()
    {
        return view('frontEnd.currentContest.currentContest');
    }


    public function showProblems()
    {
        
        return view('frontEnd.currentContest.problems.problems');
    }
    
    public function standings()
    {
        return view('frontEnd.currentContest.standings.standings');
    }
    public function status()
    {
        return view('frontEnd.currentContest.status.status');
    }
    public function mySubmission()
    {
        return view('frontEnd.currentContest.mySubmission.mySubmission');
    }
    
    public function submittedSolution(Request $request)
    {
        $hackerearth = Array(
            'client_secret' => '105409bd341d91707fc4fe7da79b869d09004dd3', //(REQUIRED) Obtain this by registering your app at http://www.hackerearth.com/api/register/
            'time_limit' => '5',   //(OPTIONAL) Time Limit (MAX = 5 seconds )
            'memory_limit' => '262144'  //(OPTIONAL) Memory Limit (MAX = 262144 [256 MB])
            );
        
        //Feeding Data Into Hackerearth API
        $config = Array();
        $config['time']='1';	 	//(OPTIONAL) Your time limit in integer and in unit seconds
        $config['memory']='262144'; //(OPTIONAL) Your memory limit in integer and in unit kb
        $config['file']=$request->solution_user;			//(REQUIRED WHEN YOU ARE USING A SOURCE FILE) Give the complete address to the file
        $config['input']=$request->user_in_txt;     	//(OPTIONAL) Properly Formatted Input against which you have to test your source code
        $config['language']='CPP';   //(REQUIRED) Choose any one of the below
        // C, CPP, CPP11, CLOJURE, CSHARP, JAVA, JAVASCRIPT, HASKELL, PERL, PHP, PYTHON, RUBY
        
        
        //Sending request to the API to compile and run and record JSON responses
        $response = run_with_file($hackerearth,$config); // Use this $response the way you want , it consists data in PHP Array
        //Printing the response
        return $response;
    }
    //
}

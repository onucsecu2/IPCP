<?php

namespace App\Http\Controllers;

//use App\Http\Request;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
//use Laracasts\Flash\Flash;
use App\Eloquent\Status;

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
     public function clarification(Request $r)
    {

        if(Input::has('post_comment'))
        {
            $status = Input::get('post_comment');
            $commentBox= Input::get('comment-text');
            $selectedStatus = Status::find($status);

            $selectedStatus->comments()->create([
                'comment_text' => $commentBox,
                'user_id' => Auth::user()->id,
                 '$status_id' => $status
                ]);
            return redirect('/current-contest/clarification');

        }
        if(Input::has('status-text'))
        {
            $text = (Input::get('status-text'));
            $userStatus = new Status();
            
            $userStatus->users_id = Auth::user()->id;
            $userStatus->status_text= $text;
            $userStatus->save();
            //Flash::success('Your status has been posted.');
           return redirect('/current-contest/clarification');

        }
        return view('frontEnd.currentContest.clarification.clarification',[

            'top_15_posts' => Status::orderBy('id','DESC')->take(1000)->get()
            
            ]);
    }

    //
}

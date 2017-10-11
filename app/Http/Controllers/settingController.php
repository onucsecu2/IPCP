<?php

namespace App\Http\Controllers;

use Illuminate\Http\UploadedFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Problems;
use App\User;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Debug\Tests\Fixtures\ToStringThrower;
use App\contest;
use App\hackerearth;
use App\contestregister;
use Request;

// controller Updated by Hetu

class settingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //
    public function settings()
    {
        return view('frontEnd.user.settings');
    }
    public function submitProblem()
    {
        return view('frontEnd.user.submitProblem');
    }
	public function contestregiseter()
    {
        return view('createTeam');
    }
	
    public function registered(Request $request)
    {
        contestregister::create(Request::all());
        //$request->save();
        //return Request::all() ;
       
    }
    public function createTeam()
    {
        $users=User::all();
        
        return view('frontEnd.user.createTeam',['users'=>$users]);
    }
    public function switchToJudge()
    {
        $mytime = Carbon::now();
        $qtr=$mytime->toDateTimeString();

        $ptr = DB::table('contests')->where('id', '4')->value('end_time');
        $str = DB::table('contests')->where('id', '4')->value('start_time');
        $val=check_date($str,$ptr,$qtr);
        
        if($val==1){
            
            return "Contest will start".$str." now ".$qtr;
        }
        elseif($val==2){
            return "contest has finished".$ptr."    ".$qtr;
        }
        else
            return view('frontEnd.user.switchToJudge');
            //return "contest is running";

    }
    public function storeProblem(Request $request)
    {
        //return $request->all();
        $problem = new Problems();
        
        
        $problem->problem_name = $request->problem_name;
        $problem->time_limit   = $request->time_limit;
        $problem->memory_limit = $request->memory_limit;
        
        $getGeneratedId = DB::table('problems')->max('id')+1;
        $tmp= (string)$getGeneratedId;

        /*$file = $request->file('prblm_desc');
        $destinationPath = 'public/Problems';
        $file->move($destinationPath,$file->$tmp.'.pdf');
        */
       $request->file('prblm_desc')->storeAs('public/Problems',$tmp.'.pdf');
       // Storage::putFileAs('public/Problems',$request->file('prblm_desc'),$tmp.'.pdf',);
        
        /*$file = $request->file('in_txt');
        $destinationPath = 'public/inputs';
        $file->move($destinationPath,$file->$tmp.'_in.txt');
        */
        
        
        $request->file('in_txt')->storeAs('public/inputs',$tmp.'_in.txt');

        //Storage::putFileAs('public/inputs',$request->file('in_txt'),$tmp.'_in.txt',);

       /* $file = $request->file('out_txt');
        $destinationPath = 'public/outputs';
        $file->move($destinationPath,$file->$tmp.'_out.txt');
        */
        
        
        $request->file('out_txt')->storeAs('public/outputs',$tmp.'_out.txt');
        //Storage::putFileAs('public/outputs',$request->file('out_txt'),$tmp.'_out.txt');
        
       /* $file = $request->file('solution');
        $destinationPath = 'public/solution';
        $file->move($destinationPath,$file->$tmp.'.cpp');
        */
        
        $request->file('solution')->storeAs('public/solutions', $tmp.'.cpp');
        //Storage::putFileAs('public/solutions',$request->file('solution'), $tmp.'.cpp');
        
        $problem->problem_description = $tmp.'.pdf'; 
        $problem->in_txt=$tmp.'_in.txt'; 
        $problem->out_txt= $tmp.'_out.txt'; 
        $problem->solution_txt= $tmp.'.cpp';
        $problem->submitted_by = $request->submitted_by;
        
        
        $problem->save();
        
        
        return redirect('/settings/submit-problem')-> with('message','Problem Added Successfully');
    }
    
}

/*
$table->increments('id');
$table->text('problem_name');
$table->Integer('time_limit');
$table->Integer('memory_limit');
$table->text('problem_description');
$table->text('in_txt');
$table->text('out_txt');
$table->text('solution_txt');
$table->timestamps();*/

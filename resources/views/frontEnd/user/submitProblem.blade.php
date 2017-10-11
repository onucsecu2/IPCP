@extends('frontEnd.master')

@section('title')
	IPCP-2017
@endsection

@section('homeIntro')
        <div class="container desc_status">
        <h3>{{Session::get('message')}}</h3>
        <!--  {!!Form::open(['url' => 'settings/saveProblem' ,'method' => 'POST','class'=>'form-horizontal','files'=> 'true'])!!}
        	-->
        	<form action="{{url('settings/saveProblem')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
        		{{csrf_field()}}
        		<label>Problem Name</label> 
            	<input class="form-control" name="problem_name"> 
         
         
                <br><br> 
                <label>Time Limit(s)</label>
                <input class="form-control" name="time_limit" type="integer"> 
           
             
                <br><br> 
                <label>Memory Limit(KB)</label>
                <input class="form-control" name="memory_limit" type="integer">
              
                <br><br> 
              
                <label>Description Upload</label>
                <input class="form-control" name="prblm_desc" type="file"  >
                
                <br><br>
                <label>input DATA</label>
                <input class="form-control" name="in_txt" type="file" >
               
                <br><br>
                <label>Output DATA</label>
                <input class="form-control" name="out_txt" type="file" >
                
                <br><br>
                <label>Solution</label>
                <input class="form-control" name="solution" type="file" >
                
                <br><br>
                <label>Submitted By</label>
                <input type="radio" name="submitted_by" value="{{ Auth::user()->name }}" checked>
                
                <br><br>
				
				
                <input type="submit" name ="btn" class="btn btn-success btn-block" value="submit"/>
                
                <br><br>
 
                <br><br>
                </form>
              <!-- {!! Form::close() !!} --> 
            </div>
           
@endsection
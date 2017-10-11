@extends('frontEnd.master')

@section('title')
	IPCP-2017
@endsection

@section('homeIntro')
        <div class="desc_status">
        <h3>{{Session::get('message')}}</h3>
        <!--  {!!Form::open(['url' => 'settings/saveProblem' ,'method' => 'POST','class'=>'form-horizontal','files'=> 'true'])!!}
        	-->
        	<form action="{{url('settings/saveTeam')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
        		{{csrf_field()}}
        		<label>Team Name</label> 
            	<input class="form-control" name="team_name"> 
         
         
                <br><br> 
                <label>Contestant 1</label>
                <select name="user1" class="form-control">
                      @foreach($users as $user1)
                      <option>{{$user1->name}}</option>
                      @endforeach
				</select>
                <br><br> 
                <label>Contestant 2</label>
                <select name="user2" class="form-control">
                      @foreach($users as $user2)
                      <option>{{$user2->name}}</option>
                      @endforeach
				</select>
                <br><br> 
                <label>Contestant 3</label>
                <select name="user3" class="form-control">
                      @foreach($users as $user3)
                      <option>{{$user3->name}}</option>
                      @endforeach
				</select>
                <br><br> 
                <br><br> 
                <label>Coach</label>
                <input class="form-control" name="coach" type="integer">
                <br><br> 
                
                <br><br>
               
                <input type="submit" name ="btn" class="btn btn-success btn-block" value="submit"/>
                
                <br><br>
                
                <br><br>
                </form>
              <!-- {!! Form::close() !!} --> 
            </div>
           
@endsection
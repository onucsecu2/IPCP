@extends('frontEnd.master')

@section('title')
	IPCP-2017
@endsection
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Contest Register</title>
  
  
  
      <link rel="stylesheet" href="{{asset('ContestRegister/')}}/css/style.css">

  
</head>

<body>
    


  
<form  action="{{url('/registered')}}" method="post">
{{csrf_field()}}
  <h2>Register</h2>
    <p>
      <label for="team" class="floatLabel">Team Name</label>
      <input  name="team_name" type="text">
    </p>

     <p>
      <label for="con1" class="floatLabel">Contestant-1</label>
      <input  name="contestant1" type="text">
    </p>

     <p>
      <label for="email1" class="floatLabel">Email</label>
      <input name="email1" type="text">
    </p>

     <p>
      <label for="con2" class="floatLabel">Contestant-2</label>
      <input  name="contestant2" type="text">
    </p>

     <p>
      <label for="email2" class="floatLabel">Email</label>
      <input  name="email2" type="text">
    </p>

     <p>
      <label for="con3" class="floatLabel">Contestant-3</label>
      <input  name="contestant3" type="text">
    </p>

     <p>
      <label for="email3" class="floatLabel">Email</label>
      <input  name="email3" type="text">
    </p>
    

     <p>
      <label for="coach" class="floatLabel">Coach</label>
      <input  name="coach" type="text">
    </p>


    <p>
      <input type="submit" name="submit" value="Register" id="submit">
    </p>
  </form>
  

    <script  src="{{asset('ContestRegister/')}}/js/index.js"></script>

</body>
</html>
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
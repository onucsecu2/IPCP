@extends('frontEnd.master')
@section('title')
	IPCP-2017
@endsection

@section('homeIntro')
	<div class="container">
		<p> yoo!! </p>
		<iframe height=100% width=80%></iframe>
	</div>
   <div class="side_view">
        <h3>{{Session::get('message')}}</h3>
        <!--  {!!Form::open(['url' => 'current-contest/submitted' ,'method' => 'POST','class'=>'form-horizontal','files'=> 'true'])!!}
        	-->
        	<form action="{{url('current-contest/submitted')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
        		{{csrf_field()}}
                <br><br> 

              
                <label>file select</label>
                <input class="form-control" name="solution_user" type="file"  >
                
                <br><br>
                <label>input DATA</label>
                <input class="form-control" name="user_in_txt" type="file" >
               
                <br><br>

                
                
                <br><br>
                
                
                <input type="submit" name ="btn" class="btn btn-success btn-block" value="submit"/>
                
                <br><br>
                
                <br><br>
                </form>
              <!-- {!! Form::close() !!} --> 
            </div>
@endsection
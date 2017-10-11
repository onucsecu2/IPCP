@extends('frontEnd.master')
@section('title')
	IPCP-2017
@endsection
@section('Active_CC')
 class="active"
@endsection
@section('homeIntro')
 <div class="container desc_status">
        <h3>{{Session::get('message')}}</h3>
        <!--  {!!Form::open(['url' => '/admin-home/create-contest/save' ,'method' => 'POST','class'=>'form-horizontal','files'=> 'true'])!!}
        	-->
        	<form action="{{url('/admin-home/create-contest/save')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
        		{{csrf_field()}}
        		
                <label>Contest Name</label>
                <input class="form-control" name="contest_name"  >
                <br><br>
                <label>Contest Description</label>
                <input class="form-control" name="contest_desc"  >
                <br><br>
                <label>Starting Time</label>
                <input class="form-control" name="start_time" type="text"   >
                <br><br>
                <label>Ending Time</label>
                <input class="form-control" name="end_time" type="text" >
                <br><br>
                @for ($i = 1; $i <=26; $i++)
    			<label>Problem {{$i}}</label>
                      <select name="prob_{{$i}}" class="form-control">
                      <option></option>
                      @foreach($Problems as $prob)
                      <option>{{$prob->id}}</option>
                      @endforeach
					  </select>
                <br><br>
				@endfor
   
                <input type="submit" name ="btn" class="btn btn-success btn-block" value="submit"/>
                
                <br><br>

                </form>
              <!-- {!! Form::close() !!} --> 
            </div>
@endsection
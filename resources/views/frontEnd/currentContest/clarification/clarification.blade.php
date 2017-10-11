
@extends('frontEnd.master')
@extends('layouts.clar_back')



@section('content')

<div class="container spark-screen">
    <div class="row">
  
        <div class="col-md-8 col-md-offset-2">
            {!! Form::open() !!}
            <div class="panel panel-default">

                    <div class="panel-body">
                        <div class="form-group">
                            <label> Write Clarification</label>
                            <textarea class="form-control" name="status-text"  id="status-text"></textarea>   
                        </div>

                    </div>
                    <div class="panel-footer clearfix">
                        <button class="btn btn-info pull-right btn-sm">Add status</button>
                    </div>
            </div>
            {!! Form::close() !!}

            @foreach($top_15_posts as $status)
           
                {!!
                    view('layouts.user_status_layout',[
                    'status' => $status,
                     'user' => \App\Eloquent\User::find($status->users_id),
                     'comments' => \App\Eloquent\StatusComments::where('status_id',$status->id)->orderBy('id','DESC')->get() 
                      ]) 

               !!}
            @endforeach

        </div>
    </div>
</div>
@endsection

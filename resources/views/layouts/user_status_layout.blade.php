

    
        <div class="panel panel-default">
    <div class="panel-heading">{{$user->name}} - {{$status->created_at->diffForHumans()}}</div>
       <div class="panel-body">
         <div class="row">
           <div class="col-md-11">
               <p>{{$status->status_text}}</p>
           </div>
           <div class="col-md-8">
              <hr>
              <ul class="list-unstyled list-inline">
                <li>
                   <button  class="btn btn-xs btn-info"  type="button" data-toggle="collapse" data-target="#view-comments-{{$status->id}}" aria-expanded="false" aria-controls="view-comments-{{$status->id}}">View & Comment</button>
                </li>
             </ul>
           </div>
          </div>
       </div>

<div class="panel-footer clearfix">
    {!! Form::open() !!}
    {!! Form::hidden('post_comment',$status->id) !!}
     
        <div class="form-group">
        <div class="input-group">
            <input type="text" class="form-control" name="comment-text" id="comment-text" placeholder="Post a comment">
            <span class="input-group-btn">
                 <button class="btn btn-default" type="submit">Go!</button>
            </span>
              
         </div>
    </div>
    {!! Form::close() !!}


    <div class="collapse" id="view-comments-{{$status->id}}">
        @if($comments->first())
            @foreach($comments as $comment)
                
                
                    <div class="row">

                        <div class="col-md-10">
                            <ul class="list-unstyled list-inline ">
                                <li>
                                    <a href="">{{App\Eloquent\User::find($comment->user_id)->name}}</a>
                                </li>
                                <li>
                                    posted {{$comment->created_at->diffForHumans()}}
                                </li>
                                
                            </ul>
                            
                                <p>{{$comment->comment_text}}</p>
                        </div>
                        
                    </div>
               

            

            @endforeach
        @else
            <p>This status contains no comments</p>
        @endif

    </div>

</div>
</div>


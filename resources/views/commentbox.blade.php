<div class="card">
    <div class="card-header">add comment</div>


    <div class="card-body">
        @if(session('success'))
            <div class="alert alert-success">{{session('success')}}</div>
        @endif
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        {!! Form::open(['url'=>'comment/'.$book->id]) !!}
            <div class="form-group">
                {!! Form::textarea('comment',null,['placeholde'=>'enter your comment','cols'=>124,'rows'=>5]) !!}
                {!! Form::submit('sendcomment',['class'=>'btn btn-primary btn-block']) !!}
            </div>
        {!! Form::close() !!}
        <hr>
            @if(count($book->comments))
                @foreach($book->comments as $comment)
            <div class="row">
                    <h3>{{$comment->user->name}}</h3><span class="text-muted">{{$comment->created_at}}</span>
            </div>
                    <div class="row"><p>{{$comment->comment}}</p></div>
                    <hr>
            @endforeach
            @else
                <div class="alert alert-info">no comment to this book plz enter your comment</div>
            @endif
    </div>
</div>

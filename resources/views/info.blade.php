
@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-header">book info</div>


        <div class="card-body">
                    @if(!empty($book))
                    <div class="row">
                        <div class="col-md-3">
                            <img src="{{asset('storage/images/'.$book->image)}}" class="img-responsive">
                        </div>
                        <div class="col-md-9 text-center">
                            <h2>{{$book->title}}</h2>
                            <p>{{$book->info}}</p>
                            <br>
                            Author:{{$book->author}}<br>
                            <a href="{{asset('storage/books/'.$book->book)}}" class="btn btn-primary">download</a>
                            <a href="{{route('info',$book->id)}}" class="btn btn-info">info</a>

                        </div>
                    </div>
                    <hr>
                    @include('commentbox')
                        @else
                        no data
                    @endif



        </div>
    </div>

@endsection



@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-header">All Books</div>


        <div class="card-body">
            {{$books->links()}}
            @if(count($books))
                @foreach($books as $book)
                    <div class="row">
                        <div class="col-md-3">
                            <img width="200" height="200" src="{{asset('storage/images/'.$book->image)}}" class="img-responsive">
                        </div>
                        <div class="col-md-9 text-center">
                            <h2>{{$book->title}}</h2>
                            <p>{{$book->info}}</p>
                            <br>
                            Author: <b>{{$book->author}}</b><br>
                            <a href="{{asset('storage/books/'.$book->book)}}" class="btn btn-primary">download</a>
                            <a href="{{route('info',$book->id)}}" class="btn btn-info">info</a>
                            {{--                            <a href="{{route('download')}}" class="btn btn-primary">donload</a>--}}
                        </div>
                    </div>
                    <hr>
                @endforeach
            @else
                ffff
            @endif

        </div>
    </div>

@endsection

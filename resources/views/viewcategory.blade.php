
@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-header">{{$cat->name}}</div>


        <div class="card-body">
            @if(count($books))
                @foreach($books as $book)
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
                            <a href="{{route('info',$cat->id)}}" class="btn btn-info">info</a>
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

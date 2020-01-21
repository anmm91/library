@extends('layouts.app')

@section('content')

                <div class="card">
                    <div class="card-header">Upload Book</div>
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
                    {!! Form::open(['method'=>'post','route'=>'upload.save','files'=>true]) !!}
                    <div class="form-group">
                        {!! Form::select('category_id',$categories->pluck('name','id'),null,['class'=>'form-control','placeholder'=>'plz choose category']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::text('title',null,['class'=>'form-control','placeholder'=>'plz enter the title']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::text('author',null,['class'=>'form-control','placeholder'=>'plz enter the author']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::textarea('info',null,['class'=>'form-control','placeholder'=>'plz enter the some info']) !!}
                    </div>
                    <div class="md-form">
                        <div class="file-field">
                            <a class="btn-floating peach-gradient mt-0 float-left">
                                <i class="fas fa-paperclip" aria-hidden="true"></i>
                                {!! Form::file('image') !!}
                            </a>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text" placeholder="Upload your book image">
                            </div>
                        </div>
                    </div>
                    <div class="md-form">
                        <div class="file-field">
                            <a class="btn-floating peach-gradient mt-0 float-left">
                                <i class="fas fa-paperclip" aria-hidden="true"></i>
                                {!! Form::file('book') !!}
                            </a>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text" placeholder="Upload your book">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::submit('upload book',['class'=>'btn btn-primary btn-block']) !!}
                    </div>

                    {!! Form::close() !!}

                    <div class="card-body">

                    </div>
                </div>

@endsection

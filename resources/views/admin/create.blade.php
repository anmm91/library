@extends('adminlayout.app')


@section('content')
@section('page_title')
    categories
@endsection
@section('small_title')
    categories
@endsection



<section class="content">



    <!-- Default box -->
    <div class="box">
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="box-header with-border">
            <h3 class="box-title">List of categories</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                    <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">
            {!! Form::open(['method'=>'post','route'=>'categories.store']) !!}
            @csrf
            <div class="form-group">
                {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'plz enter category']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('save category',['class'=>'btn btn-primary btn-block']) !!}
            </div>
            {!! Form::close() !!}
        </div>
        <!-- /.box-body -->

        <!-- /.box-footer-->
    </div>
    <!-- /.box -->

</section>

@endsection

